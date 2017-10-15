select passenger.ssn, passenger.name, sum(tripmiles) 
from passenger inner join reservation on 
passenger.ssn = reservation.ssn inner join tripinfo on 
reservation.code=tripinfo.code 
where passenger.ssn not in (select ssn from crew) 
group by ssn;