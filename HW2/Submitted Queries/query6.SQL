select k.company, k.tripnbr, k.segnbr, k.date from 
(select tripinfo.code, tripinfo.company, tripinfo.tripnbr, tripinfo.segnbr, reservation.date from reservation right join 
tripinfo on reservation.code = tripinfo.code) k where k.date IS NULL;