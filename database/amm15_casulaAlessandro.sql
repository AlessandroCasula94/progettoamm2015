drop database amm15_casulaAlessandro;

create database amm15_casulaAlessandro;


use amm15_casulaAlessandro;



create table Utente(
cf varchar(16) primary key,

tipo boolean not null,
nome varchar(25) not null,
 
cognome varchar(25) not null,

residenza varchar(50) not null,
telefono varchar(10) not null,

password varchar(20) not null);



create table Stanza( 
cod int AUTO_INCREMENT primary key,

nposti varchar(4) not null,

descrizione varchar(100) not null,
prezzo decimal(5,2) not null,
img varchar(2000) not null
);

create table Prenotazioni(
cod_pren int AUTO_INCREMENT primary key,

data_i date not null,

data_f date not null,


cf varchar(16),

cod int(5) ,

foreign key (cf) references Utente(cf),

foreign key (cod) references Stanza(cod)
 
);



insert into Utente values 

('admin','0','mario','rossi','san giuliano terme','3487598211','admin'),

('user','1','paolo','verdi','genoni','3442744567','user');



insert into stanza values 

('','2','suite',200,'http://www.bedandbreakfastostiaantica.it/sito/wp-content/themes/brandnew/scripts/timthumb.php?src=http://www.bedandbreakfastostiaantica.it/sito/wp-content/uploads/camera-letto-ostia-antica-suite-bb.jpg&w=934&h=290&zc=1&q=100'),

('','4','economica',40,'http://static.bakeca.it/immagini/63e/63efbf443c482bbc33872d5f58805896.jpg'),

('','1','standard',30,'https://aff.bstatic.com/images/hotel/840x460/438/43811773.jpg'),

('','2','standard',40,'http://r-ec.bstatic.com/images/hotel/840x460/370/37078523.jpg'),

('','5','economica',50,'https://a2.muscache.com/im/pictures/9158492/561123e6_original.jpg?aki_policy=x_large'),

('','3','elegante',150,'http://www.visitflorence.com/it/img/art/florence-luxury-BB.jpg');







