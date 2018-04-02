<?php

namespace App\Http\Controllers\Operation;

use Intervention\Image\ImageManager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Operation\Access;
use App\Models\Administration\Parameters;
use File;

class AccessController extends Controller {

    public function __construct() {
        $this->middleware("auth");
    }

    public function index() {
        $arl = Parameters::where("group", "arl")->orderBy("description", "asc")->get();
        $eps = Parameters::where("group", "eps")->orderBy("description", "asc")->get();
        $dependency = Parameters::where("group", "dependency")->orderBy("description", "asc")->get();
        $element = Parameters::where("group", "element")->orderBy("description", "asc")->get();
        $mark = Parameters::where("group", "mark")->orderBy("description", "asc")->get();

        return view("operation.access.index", compact("arl", "eps", "dependency", "element", "mark"));
    }

    public function store(Request $req) {
        $in = $req->all();

        $retrieved = $in["birth_date"];
        $date = \DateTime::createFromFormat('dmY', $retrieved);
        $in["birth_date"] = $date->format('Y-m-d');

        $path = public_path() . "/images/" . date("Y-m-d");
        $pathsys = "images/" . date("Y-m-d");

        $res = File::makeDirectory($path, $mode = 0777, true, true);
        $manager = new ImageManager(array('driver' => 'imagick'));

        $image = $manager->make($in["img"])->widen(400);
        $pathsys .= "/" . $in["document"] . ".jpg";
        $path .= "/" . $in["document"] . ".jpg";
//        echo $path;exit;

        $in["img"] = url($pathsys);
        $in["birth_date"] = date("Y-m-d", strtotime($in["birth_date"]));
        $in["status_id"] = 1;

        if ($in["mark_id"] == "null") {
            unset($in["mark_id"]);
        }

        $image->save($path);
        $row = Access::create($in);

        return response()->json(["status" => true, "row" => $row]);
    }

    public function update($document) {
        $row = Access::where("document", $document)->where("status_id", 1)->first();

        if ($row != null) {
            $row->status_id = 2;
            $row->save();
            return response()->json(["status" => true, "row" => $row]);
        } else {
            return response()->json(["status" => false, "msg" => "Documento no se encuentra registrado en nuestro sistema"], 409);
        }
    }

    public function validatePerson($document) {
        $row = Access::where("document", $document)->where("status_id", 1)->first();
//        if ($row != null) {
//            $row->status_id = 2;
//            $row->save();
//            return response()->json(["status" => true, "row" => $row]);
//        } else {
//            return response()->json(["status" => false]);
//        }
    }

}
