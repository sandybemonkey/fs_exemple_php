<?php
#    This file is part of the PHP example for FranceConnect
#
#    Copyright (C) 2015-2016 Eric Pommateau, Maxime Reyrolle, Arnaud Bétrémieux
#
#    This example is free software: you can redistribute it and/or modify
#    it under the terms of the GNU General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    (at your option) any later version.
#
#    This example is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU General Public License for more details.
#
#    You should have received a copy of the GNU General Public License
#    along with this example.  If not, see <http://www.gnu.org/licenses/>.

require_once("FournisseurDonnees.class.php");


/*
 *    scopes: revenu_fiscal_de_reference    
 *   Aujourd'hui, des données sont provisionnées pour deux utilisateurs : 
 *
 *  Jean Dupond (login: demo@franceconnect.fr/123)
 *   Mireille Binks (login: mireille@binks.fr/123)
 */

class FDGuichetBreton extends FournisseurDonnees {
	
	public function getName(){
		return "Guichet des Bretons";
	}
	
	protected function getFDURL(){
		return "http://datafranceconnect.opendatasoft.com/api/records/1.0/search?dataset=guichet-des-bretons";
	}
	
	public function getInfo($access_token){
		$info = parent::getInfo($access_token);
		$result = array();
		$result['rfr'] = $info['records'][0]['fields']['rfr'];
		return $result;
	}
	
}