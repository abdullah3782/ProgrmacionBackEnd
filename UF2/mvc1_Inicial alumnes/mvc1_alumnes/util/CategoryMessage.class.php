<?php
/**
 * Aquest fitxer recull tots els missatges que necessita l'usuari.
 * Uns missatges (INF_FORM) seran per a comunicar a l'usuari què està passant en general
 * Altres missatges seran per a informar d'un error que necessita l'usuari per a rectificar
 */
class CategoryMessage {

    //missatges informatius generals
    const INF_FORM =
        array(
            'insert' => 'Data inserted successfully',
            'update' => 'Data updated successfully',
            'delete' => 'Data deleted successfully',
            'found'  => 'Data found',
            '' => ''
        );
    //missatges d'errors
    const ERR_FORM =
        array(
            'empty_id'      => 'Id must be filled',
            'empty_name'    => 'Name must be filled',
            'invalid_id'    => 'Id must be valid values',
            'invalid_name'  => 'Name must be valid values',
            'exists_id'     => 'Id already exists',
            'not_exists_id' => 'Id not exists',
            'not_found'     => 'No data found',
            '' => ''
        );

    const ERR_DAO =
        array(
            'insert' => 'Error inserting data',
            'update' => 'Error updating data',
            'delete' => 'Error deleting data',
            'used'   => 'No data deleted, Category in use',
            '' => ''
        );
    
}