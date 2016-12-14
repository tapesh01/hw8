<?php

require_once './Editor.php';
require_once './Nettuts.php';

function doJobFor(DateTime $date) {
        if ((new DateTime())->getTimestamp() > $date->getTimestamp()) {
            $editor = new Editor('John Doe');
            $nettuts = new Nettuts();
            $nettuts->publishNextArticle($editor);
        }
    }

}
?>
