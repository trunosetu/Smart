<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;
use Illuminate\Support\Env;
use \PhpMqtt\Client\MqttClient;
use \PhpMqtt\Client\ConnectionSettings;
use App\Models\DataSensor;
use Illuminate\Http\Request;
use App\Models\Device; 
class MqttListener extends Command
{
 
    protected $signature = 'app:mqtt-listener';

    protected $description = 'Command description';


    public function handle()
    {
        $sub_topic = env('MQTT_TOPIC_SUB', 'sub/iot/sensor');
        $server = env('MQTT_BROKER', 'broker.emqx.io ');
        $port = env('MQTT_PORT', 1883 );
        $username = env('MQTT_USER', 'emqx');
        $password = env('MQTT_PASSWIRD', 'public');
        
        $sub_clientId = env('MQTT_CLIENT_ID_SUB', 'my-sub-unique-id-goyim');
        $clean_session = false;
        $mqtt_version = MqttClient::MQTT_3_1_1;

        $connectionSettings = (new ConnectionSettings)
        ->setUsername($username)
        ->setPassword($password)
        ->setKeepAliveInterval(60);

        $mqtt = new MqttClient($server,$port,$sub_clientId,$mqtt_version);
        $mqtt->connect($connectionSettings,$clean_session);
        print( "subskreber klien terkoneksi\n");

        $mqtt->subscribe($sub_topic, function($topic, $message){
            printf("recived topic %s:%s \n", $topic,$message);
            $objMsg = json_decode($message);
            printf("device_id: %d\n", $objMsg->device_id);
            printf("temperature: %d\n", $objMsg->temperature); 
            printf("humidity: %d\n", $objMsg->humidity); 
            printf("lux: %d\n", $objMsg->lux); 
            $dataSensor = DataSensor::create([
                'device_id' => $objMsg ->device_id,
                'temperature' => $objMsg->temperature,
                'humidity' => $objMsg->humidity,
                'lux' => $objMsg->lux,
            ]);
        },0);
      
    $mqtt->loop(true);     
    }
    
};
