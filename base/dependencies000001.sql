/***********************************I-DEP-FFP-TIE-0-18/06/2021*****************************************/
select pxp.f_insert_testructura_gui ('TIE', 'SISTEMA');
select pxp.f_insert_testructura_gui ('MAR', 'TIE');
/***********************************F-DEP-FFP-TIE-0-18/06/2021*****************************************/

/***********************************I-DEP-ICQ-TIE-1-18/06/2021*****************************************/
select pxp.f_insert_testructura_gui ('PROD', 'TIE');
/***********************************F-DEP-ICQ-TIE-1-18/06/2021*****************************************/

/***********************************I-DEP-DZ-TIE-1-23/06/2021*****************************************/
select pxp.f_insert_testructura_gui ('CAT', 'TIE');
/***********************************F-DEP-DZ-TIE-1-23/06/2021*****************************************/

/***********************************I-DEP-DS-TIE-1-26/06/2021*****************************************/
select pxp.f_insert_testructura_gui ('VT', 'TIE');
/***********************************F-DEP-DS-TIE-1-26/06/2021*****************************************/

/***********************************I-DEP-EAQ-TIE-1-26/06/2021*****************************************/
select pxp.f_insert_testructura_gui ('CLIE', 'TIE');
/***********************************F-DEP-EAQ-TIE-1-26/06/2021*****************************************/

/***********************************I-DEP-AT-TIE-1-26/06/2021*****************************************/
select pxp.f_insert_testructura_gui ('DOSI', 'TIE');
/***********************************F-DEP-AT-TIE-1-26/06/2021*****************************************/

/***********************************I-DEP-JRR-TIE-1-21/07/2021*****************************************/
ALTER TABLE tie.tventa ADD 
    CONSTRAINT fk__tventa__id_proceso_wf FOREIGN KEY (id_proceso_wf) REFERENCES wf.tproceso_wf(id_proceso_wf);

ALTER TABLE tie.tventa ADD 
    CONSTRAINT fk__tventa__id_estado_wf FOREIGN KEY (id_estado_wf) REFERENCES wf.testado_wf(id_estado_wf);
/***********************************F-DEP-JRR-TIE-1-21/07/2021*****************************************/
