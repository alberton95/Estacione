#include <SPI.h>
#include <Ethernet.h>

byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };

byte ip[] = { 192, 168, 235, 101 };

byte servidor[] = { 192, 168, 235, 136 };

EthernetClient client;

int vaga1 = 0;
int vaga2 = 1;

void setup() {
  
  Serial.begin(9600);
  Ethernet.begin(mac, ip);
  
}

void loop() {
  char comando = Serial.read();

  if(comando == 'a') {

    vaga1 = vaga2 + 3;
    vaga2 = vaga1 + 5;
    
    if (client.connect(servidor, 8095)) {
      Serial.println("connected");
      client.print("GET /arduinoprojects/estacione.php?");
      client.print("vaga1=");
      client.print(vaga1);
      client.print("&vaga2=");
      client.println(vaga2);
  
      Serial.print("vaga 1 = ");
      Serial.println(vaga1);
      Serial.print("vaga 2 = ");
      Serial.println(vaga2);
  
      client.stop();
    } else {
      Serial.println("connection failed");
    }
    
  }
}

