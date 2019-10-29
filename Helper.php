<?php
    namespace App;

    class Helper
    {
        static function load(){}

            public static function display($info){
                if(empty($info)) return;
                
                echo '<div>';
                echo '    <essay-card>';
                echo '        <p class="author">';
                foreach($info['author'] as $author){
                    echo '<a href="search.php?author='.urlencode($author).'">'.$author.'</a>, ';
                }
                echo '        </p>';
                echo '        <h4 class="title mb-3 mt-3">'.$info['title'].'</h4>';
                if($info['journal'])    echo '        <p class="journal"><i class="MDI book-multiple-variant"></i> <strong>Journal:</strong> '.$info['journal'].'</p>';
                if($info['conf'])       echo '        <p class="metting"><i class="MDI microphone"></i> <strong>Conference:</strong> '.$info['conf'].'</p>';
                if($info['year'])       echo '        <p class="time"><i class="MDI clock"></i> <strong>Publish Year:</strong> '.$info['year'].'</p>';
                if($info['remote'])     echo '        <p class="link"><i class="MDI link"></i> <strong>Remote Link:</strong> '.$info['remote'].'</p>';
                if($info['local'])      echo '        <p class="file"><i class="MDI file"></i> <strong>Local File:</strong> '.$info['local'].'</p>';
                echo '    </essay-card>';
                echo '</div>';
                
            } 
    }