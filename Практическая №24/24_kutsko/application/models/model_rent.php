<?php
class Model_Rent extends Model
{
    public function get_page($page)
    {
        $page_is = ($page - 1) * 10;
        $mysqli = $this->sql_connect();
        
        if($mysqli->connect_error){
			die('Error');
		}
        $mysqli->set_charset('utf8');

        $str = "SELECT * FROM `rent` LIMIT ".$page_is.", 10";
        $str_count = "SELECT * FROM `rent` ";

        $res_count = $mysqli->query($str_count);
        $result = $mysqli->query($str);

        $count_posts = $res_count->num_rows;
        $count = 10;
        $count_page = floor($count_posts / $count);
        if($count_posts % $count > 0) {
            $count_page++;
        }
        $data = [$count_page, $page];

        while( $row = $result->fetch_assoc() ){
            array_push($data, [ $row['id'], $row['name'], $row['phone'], $row['text'], $row['type'], $row['adress'], $row['cost'], $row['email'], $row['big_text'], $row['date'] ]);
        }
        $type = "";
        for($i = 2; $i < count($data); $i++)
        {
            if($data[$i][4] == 1) $type = "Flat";
            elseif($data[$i][4] == 2) $type = "Room";
            elseif($data[$i][4] == 3) $type = "House";
            $data[$i][4] = $type;
        }

        return $data;
    }
    public function get_post($id)
    {
        $mysqli = $this->sql_connect();
        
        if($mysqli->connect_error){
			die('Error');
		}
        $mysqli->set_charset('utf8');

        $str = "SELECT * FROM `rent` WHERE `id` = ".$id."";
        $result = $mysqli->query($str);
        $data = [];
        while( $row = $result->fetch_assoc() ){
            $data = [ $row['id'], $row['name'], $row['phone'], $row['text'], $row['type'], $row['adress'], $row['cost'], $row['email'], $row['big_text'], $row['date'] ];
        }
        $type = "";
        if($data[4] == 1) $type = "Flat";
        elseif($data[4] == 2) $type = "Room";
        elseif($data[4] == 3) $type = "House";
        $data[4] = $type;

        return $data;
    }
    public function set_post($post)
    {
        $mysqli = $this->sql_connect();
        if($mysqli->connect_error){
			die('Error');
		}
        $mysqli->set_charset('utf8');

        $date = date('Y-m-d H:i:s');
        $str = "INSERT INTO `rent` VALUES (NULL, '".$post['name']."', '".$post['phone']."', '".$post['text']."', ".$post['type'].", '".$post['adress']."', ".$post['cost'].", '".$post['email']."', '".$post['big_text']."', '".$date."' )";
        if($post['name'] && $post['phone'] && $post['text'] && $post['cost'])
        {
            $mysqli->query($str);
            return true;
        }
        else 
        {
            $mysqli->query($str);
            return false;
        }
    }
}

?>