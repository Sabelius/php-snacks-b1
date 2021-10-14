<?php 

$paragraph = "L'Australia svolgerà un ruolo chiave per stabilire colonie umane sulla Luna, dopo aver concluso un accordo con la Nasa per la produzione di un rover che sarà una parte di rilievo per le future missioni. Il veicolo di 20 kg aiuterà a raccogliere suolo contenente ossidi mentre la Nasa, usando impianti separati, si propone di estrarre ossigeno dalla superficie, per valutare come potrebbe sostenere la vita umana.

Trovare una fonte di ossigeno è considerato di importanza cruciale per vivere sul satellite terrestre. La Nasa ha in programma di riportare l'uomo sulla Luna entro il 2024 e di costituire un avamposto permanente nel polo sud lunare, che aprirebbe la strada ad attività scientifica di lungo termine, e poi alla prima missione umana a Marte negli anni 2030.

Il governo australiano darà supporto a imprese e ricercatori leader per sviluppare il veicolo. Il primo ministro Scott Morrison ha detto che la missione contribuirà alla crescita dell'economia nazionale, con l'opportunità per l'Australia di affermarsi globalmente nel settore spaziale. E secondo il direttore dell'Agenzia spaziale australiana, Enrico Palermo, la produzione del rover beneficierà dell'esperienza in operazioni remote del settore minerario.

La più stretta collaborazione nello spazio sarà un altro aspetto del nuovo patto di sicurezza Aukud fra Usa, Australia e Gran Bretagna, considerando che ogni operazione militare in futuro dipenderà dai satelliti per comunicazioni, navigazione e guida delle armi.";


$multipleparagraphs = explode(".", $paragraph);

?>

<?php foreach($multipleparagraphs as $newparagraph) {
?>
    <p><?php echo $newparagraph; ?></p>

<?php } ?>