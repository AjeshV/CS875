select departure.code, departure.date, passenger.ssn, passenger.name 
from departure left join reservation 
on departure.code = reservation.code and 
departure.date = reservation.date left join passenger 
on reservation.ssn = passenger.ssn 
order by departure.code, departure.date, passenger.name asc;