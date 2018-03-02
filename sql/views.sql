    drop view vaccess_person
create view vaccess_person as
select a.id,a.first_name,a.second_name,a.last_name,a.second_surname,a.gender,a.document,a.birth_date,a.type_blood,eps.description as eps,
arl.description as arl,a.status_id,a.created_at,a.updated_at,dep.description as dependency,a.authorization_person
from  access_person a
LEFT JOIN parameters eps ON eps.code=eps_id and eps.group ='eps'
LEFT JOIN parameters arl ON arl.code=arl_id and arl.group ='arl'
LEFT JOIN parameters dep ON dep.code=dependency_id and dep.group ='dependency'

create view vcities as 
select c.id,c.description city,d.description department,c.code
from cities c
join departments d ON d.id=c.department_id;

--﻿﻿drop view vclient
CREATE VIEW vclient AS
SELECT s.id,s.business_name,s.business,coalesce(s.name,'') as name,coalesce(s.last_name,'') as last_name,s.document,s.email,coalesce(s.address_send,'') as address,s.phone,
s.term,c.description as city,s.web_site,coalesce(typeperson.description,'') as typeperson,typeregime.description as typeregime,
typestakeholder.description as typestakeholder,status.description as status,s.responsible_id,coalesce(u.name,'') as responsible,
s.created_at,s.address_invoice,send.description city_invoice,s.updated_at
FROM stakeholder s
JOIN cities c ON c.id=s.city_id
LEFT JOIN cities send ON send.id=s.invoice_city_id
LEFT JOIN users as u ON u.id=s.responsible_id
LEFT JOIN parameters as typeperson ON typeperson.code=s.type_person_id and typeperson."group"='typeperson'
LEFT JOIN parameters as typeregime ON typeregime.code=s.type_regime_id and typeregime."group"='typeregime'
LEFT JOIN parameters as typestakeholder ON typestakeholder.code=s.type_stakeholder and typestakeholder."group"='typestakeholder'
JOIN parameters as status ON status.code=s.status_id and status."group"='status_user'
WHERE s.type_stakeholder=1 


drop view vticket
create view vticket as 
select t.id,t.subject,t.description,dep.description as dependency,prio.description as priority,
s.description as status,t.created_at,t.dependency_id
from tickets t
JOIN parameters dep ON dep.code=t.dependency_id and dep.group='dependency'
JOIN parameters prio ON prio.code=t.priority_id and prio.group='priority'
JOIN parameters s ON s.code=t.status_id and s.group='status_ticket'



create view vusers as 
select  users.id,users.name,users.last_name,stakeholder.business as stakeholder,users.email,users.document,r.description as role,parameters.description as status,
users.chief_area_id
from users
JOIN parameters r ON r.code=users.role_id  and r.group='roles'
LEFT JOIN stakeholder ON stakeholder.id= users.stakeholder_id
LEFT JOIN parameters ON parameters.code = users.status_id and parameters.group='status_user'