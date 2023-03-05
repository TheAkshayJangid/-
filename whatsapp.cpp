#include <iostream>
#include <string>
using namespace std;

int main() {
  string whatsapp_link = "https://wa.me/";
  string mobile_number;

  cout << "Enter your mobile number: ";
  cin >> mobile_number;

  whatsapp_link += mobile_number;

  cout << "Your WhatsApp link is: " << whatsapp_link << endl;

  return 0;
}
