#define triggerPin 16 // Jumper pin trigger sensor ke pin D0 NodeMCU
#define echoPin 5 // Jumper pin echo sensor ke pin D1 NodeMCU

const int indikator = 2;
const int relay_pompa = 3;
void setup() {
  Serial.begin (9600); // buka serial monitor dengan br 9600
  pinMode(triggerPin, OUTPUT);
  pinMode(echoPin, INPUT);
  }

void loop() {
  long duration, batas, ph_air;
  digitalWrite(triggerPin, LOW);
  delayMicroseconds(2);         // delay tiap pengukuran (bisa diset sendiri)
  digitalWrite(triggerPin, HIGH);
  delayMicroseconds(10);        // delay tiap pengukuran (bisa diset sendiri)
  digitalWrite(triggerPin, LOW);
  duration = pulseIn(echoPin, HIGH);
  batas = 
  if(ph_air < batas){
    digitalWrite(relay_pompa, HIGH);
  }else{
    digitalWrite(relay_pompa, LOW);
  }
  delay(1000);                         
  }
  Serial.println("Ketinggian :"); //kirim tulisan 'Ketinggian :' ke serial monitor
  Serial.print(ph_air); //kirim tulisan ' ph_air ' ke serial monitor
  delay(400);
}
