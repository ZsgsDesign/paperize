<?php
    namespace App;

    require_once 'autoload.php';
    
    class Paper
    {
        public function filter($filter)
        {
            $queryStr="SELECT * FROM papers ";
            $execArr=[];
            if(!empty($filter)){ 
                $queryStr.=" WHERE ";
            }
            foreach($filter as $key=>$word){
                $queryStr.=" `$key` like ? ";
                $execArr[]="%$word%";
            }
            $db = DB::get();
            $rs = $db->prepare($queryStr." ORDER BY pid DESC");
            $rs->execute($execArr);
            $ret=$rs->fetchAll(\PDO::FETCH_ASSOC);
            foreach($ret as &$r){
                $r['author']=$this->getAuthor($r['pid']);
            }
            return $ret;
        }

        public function rand()
        {
            $db = DB::get();
            $rs = $db->prepare("SELECT * FROM papers ORDER BY rand() ASC");
            $rs->execute();
            $ret=$rs->fetch(\PDO::FETCH_ASSOC);
            if(empty($ret)) return [];
            $ret['author']=$this->getAuthor($ret['pid']);
            return $ret;
        }

        public function getAuthor($pid)
        {
            $db = DB::get();
            $rs = $db->prepare("SELECT * FROM paper_authors WHERE pid=?");
            $rs->execute([$pid]);
            $ret=$rs->fetchAll(\PDO::FETCH_ASSOC);
            $author=[];
            foreach($ret as $r){
                $author[]=$r['author'];
            }
            return $author;
        }
    }