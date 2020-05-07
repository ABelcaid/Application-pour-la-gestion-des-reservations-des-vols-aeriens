
CREATE DATABASE gestion_reservations;
USE gestion_reservations;




/*==============================================================*/
/* Table: vols                                          */
/*==============================================================*/
create table vols
(
   id                       int not null,
   depart                   varchar(254),
   destination              varchar(254),
   date_depart              date,
   num_place                int,
   prix                     int,
   primary key (id)
);



/*==============================================================*/
/* Table: passager                                                */
/*==============================================================*/
create table passager
(
   id                   int not null,
   vol_id               int,
   nom                  varchar(254),
   prenom               varchar(254),
   age                  int,
   pays                 varchar(254),
   adresse              varchar(254),
   tele                 int,
   email                varchar(254), 
   num_passport         int,
   primary key (id)
);




alter table passager add constraint FK_Association_1 foreign key (vol_id)
      references vols (id) on delete restrict on update restrict;



/*==============================================================*/
/* Inset data in vols Table                                           */
/*==============================================================*/
insert into vols
values (2,"Agadir","Paris",'2020-05-26',200);

/*==============================================================*/
/* Inset data in passager Table                                           */
/*==============================================================*/
-- insert into passager
-- values (1,2,"Belcaid","Abderrahim",'1999-04-27',12345678,"belcaid@mail.me");

