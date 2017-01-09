<?php

include_once('../model/Vendeur.php');
include_once('../model/Lot.php');
include_once('../model/Article.php');
include_once('../model/modele.php');
include_once('../model/marque.php');


class ControllerRechercheLot {
	
	public static function rechercheLotByNum(){
		$numeroLot = $_POST['numeroLot'];
		$lot = Lot::getLotByCoupon($numeroLot);
		$listArticle = urlencode(serialize(Article::getArticlesByLot($lot->getId())));
		$a = Article::getArticlesByLot($lot->getId());
		header('location:../views/modificationLot.php?lot='.urlencode(serialize($lot)).'&listArticle='.$listArticle);
	}
	

}

ControllerRechercheLot::rechercheLotByNum();


?>
