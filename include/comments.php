<?php
// $Id: comments.php,v 1.0 26/03/2005 14:47:00 AdminOne Exp $
//  ------------------------------------------------------------------------ //
//            RM+SOFT - Sistema de Galer�a Fotogr�fica en L�nea              //
//                Copyright Red M�xico Soft � 2005. (Eduardo Cort�s)         //
//                     <http://www.redmexico.com.mx/>                        //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//  ------------------------------------------------------------------------ //
//	Este programa es un programa libre; puedes distribuirlo y modificarlo	 //
//	bajo los t�rminos de al GNU General Public Licencse como ha sido		 //
//	publicada por The Free Software Foundation (Fundaci�n de Software Libre; //
//	en cualquier versi�n 2 de la Licencia o mas reciente.					 //
//                                                                           //
//	Este programa es distribuido esperando que sea �ltil pero SIN NINGUNA	 //
//	GARANT�A. Ver The GNU General Public License para mas detalles.			 //
//  ------------------------------------------------------------------------ //
//	Questions, Bugs or any comment plese write me						 	 //
//	Preguntas, errores o cualquier comentario escribeme						 //
//	<adminone@redmexico.com.mx>												 //
//  ------------------------------------------------------------------------ //

function rmgal_com_update($idpic, $total_num){
	$db =& Database::getInstance();
	$sql = 'UPDATE '.$db->prefix('rmgal_pics').' SET comments = '.$total_num.' WHERE idpic = '.$idpic;
	$db->query($sql);
}

function rmlib_com_approve(&$comment){
	// notification mail here
}

?>