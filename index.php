<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            require_once 'vendor/autoload.php';
            
            //use GuzzleHttp\Exception\ClientException;
            //use GuzzleHttp\Exception\RequestException;
            use GuzzleHttp\Client;
            //use GuzzleHttp\Message\Request;
            //use GuzzleHttp\Message\Response;

            $httpClient = new Client(); 
            
            $response = $httpClient->request('POST', 'http://tweeps.locaweb.com.br/tweeps', [
                //"body" => json_encode($requestBody),
                "headers" => [
                    "Username" => "lcpapa@outlook.com",
                ],
            ]);
            
            $userData = json_decode($response->getBody()->getContents());
            var_dump($userData);
            $i = 0;
            '<ul>';
            foreach($userData->statuses as $tweet) {
                $tweet_text = $tweet->{"text"};
                echo '<li>';
                echo $tweet_text;
                echo '</li>';
                $i = $i +1;;
            }
            echo '</ul>';
            /*echo $g = count($userData);
            for($i = 0; $i < count($userData[0]); $i++) {
                echo "<div>ID: " . $userData[0][$i]->{'id_str'} . "</div>";
                echo "<br />";
            }*/
        ?>
    </body>
</html>
