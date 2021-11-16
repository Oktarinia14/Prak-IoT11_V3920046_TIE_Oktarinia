#include <Wire.h>
#include <LiquidCrystal_I2C.h>

LiquidCrystal_I2C lcd(0x27, 16, 2);

const int lm35_data = A0; //pin data ke A0
const int indikator = 2;

int nilai_analog; //int: bil.bulat contoh 1-10
float suhu; //float: nilai sampai koma contoh  39,33

void setup() {
  lcd.begin();

  pinMode(indikator, OUTPUT);
    
  lcd.setCursor(2, 0);
  lcd.print("SIMKASU ULTRASONIK");
  lcd.setCursor(5, 1);
  lcd.print("LM35");
  delay(3000);
}

void loop() {
  lcd.clear();

  nilai_analog = analogRead(lm35_data); //baca nilai analog pin A0
  suhu = (nilai_analog * 4.88);   //konversi analog
  suhu = (suhu / 10);       //Suhu di dapat dg 10mV/°C
  lcd.setCursor(0, 0);
  lcd.print("Suhu : ");
  lcd.print(suhu);
  lcd.print(" C");

  if(suhu < 27){
    digitalWrite(indikator, HIGH);
  }else{
    digitalWrite(indikator, LOW);
  }
  delay(1000);                         
}
