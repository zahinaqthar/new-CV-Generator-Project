/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     10/4/2022 10:50:03 AM                        */
/*==============================================================*/


drop table if exists TBADMIN;

drop table if exists TBBASIC;

drop table if exists TBEDUCATION;

drop table if exists TBOTHER;

drop table if exists TBPREMIUM;

drop table if exists TBTEMPLATE;

drop table if exists TBUSER;

drop table if exists TBWORKEX;

/*==============================================================*/
/* Table: TBADMIN                                               */
/*==============================================================*/
create table TBADMIN
(
   IDADMIN              char(5) not null,
   NAMAADMIN            varchar(30),
   PWADMIN              varchar(33),
   primary key (IDADMIN)
);

/*==============================================================*/
/* Table: TBBASIC                                               */
/*==============================================================*/
create table TBBASIC
(
   IDBASIC              char(5) not null,
   IDUSER               char(5),
   FULLNAME             varchar(30),
   EMAIL                varchar(30),
   PHONENUM             char(13),
   WEBSITE              varchar(100),
   ADDRESS              varchar(50),
   primary key (IDBASIC)
);

/*==============================================================*/
/* Table: TBEDUCATION                                           */
/*==============================================================*/
create table TBEDUCATION
(
   IDEDU                char(5) not null,
   IDUSER               char(5),
   COURSENAME           varchar(50),
   INSTNAME             varchar(50),
   STARTDATEEDU         date,
   ENDDATEEDU           date,
   OTHEREDU             varchar(255),
   primary key (IDEDU)
);

/*==============================================================*/
/* Table: TBOTHER                                               */
/*==============================================================*/
create table TBOTHER
(
   IDOTHER              char(5) not null,
   IDUSER               char(5),
   QUALI                varchar(255),
   INTEREST             varchar(255),
   REFERENCE            varchar(255),
   primary key (IDOTHER)
);

/*==============================================================*/
/* Table: TBPREMIUM                                             */
/*==============================================================*/
create table TBPREMIUM
(
   IDPREMIUM            char(5) not null,
   IDADMIN              char(5),
   primary key (IDPREMIUM)
);

/*==============================================================*/
/* Table: TBTEMPLATE                                            */
/*==============================================================*/
create table TBTEMPLATE
(
   IDTEMPLATE           char(5) not null,
   IDUSER               char(5),
   IDADMIN              char(5),
   NAMATEMPLATE         varchar(30),
   DESTEMPLATE          varchar(100),
   FOTOTEMPLATE         varchar(30),
   primary key (IDTEMPLATE)
);

/*==============================================================*/
/* Table: TBUSER                                                */
/*==============================================================*/
create table TBUSER
(
   IDUSER               char(5) not null,
   IDPREMIUM            char(5),
   NAMAUSER             varchar(30),
   PWUSER               varchar(33),
   primary key (IDUSER)
);

/*==============================================================*/
/* Table: TBWORKEX                                              */
/*==============================================================*/
create table TBWORKEX
(
   IDWORKEX             char(5) not null,
   IDUSER               char(5),
   JOBTIT               varchar(30),
   COMPANAME            varchar(50),
   STARTDATEWEX         date,
   ENDDATEWEX           date,
   OTHERWEX             varchar(255),
   primary key (IDWORKEX)
);

alter table TBBASIC add constraint FK_INPUT_BASIC foreign key (IDUSER)
      references TBUSER (IDUSER) on delete restrict on update restrict;

alter table TBEDUCATION add constraint FK_INPUT_EDUCATION foreign key (IDUSER)
      references TBUSER (IDUSER) on delete restrict on update restrict;

alter table TBOTHER add constraint FK_INPUT_OTHER foreign key (IDUSER)
      references TBUSER (IDUSER) on delete restrict on update restrict;

alter table TBPREMIUM add constraint FK_ADMIN_MENGELOLA_PREMIUM_ACCOUNT foreign key (IDADMIN)
      references TBADMIN (IDADMIN) on delete restrict on update restrict;

alter table TBTEMPLATE add constraint FK_ADMIN_MENGELOLA_TEMPLATE foreign key (IDADMIN)
      references TBADMIN (IDADMIN) on delete restrict on update restrict;

alter table TBTEMPLATE add constraint FK_USER_MEMILIH_TEMPLATE foreign key (IDUSER)
      references TBUSER (IDUSER) on delete restrict on update restrict;

alter table TBUSER add constraint FK_USER_MEMILIKI_PREMIUM_ACCOUNT foreign key (IDPREMIUM)
      references TBPREMIUM (IDPREMIUM) on delete restrict on update restrict;

alter table TBWORKEX add constraint FK_INPUT_WORK_EXPERIENCE foreign key (IDUSER)
      references TBUSER (IDUSER) on delete restrict on update restrict;

