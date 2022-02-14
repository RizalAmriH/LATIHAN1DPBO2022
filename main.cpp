#include "TimBola.cpp"

using namespace std;

int main(){

    TimBola a1;
    TimBola::DaftarPemain tim1[11];
    a1.setNamaTim("KST Pusat");
    a1.setNegaraTim("Inggris");
    a1.setTahunBerdiri("1920");
    tim1[0].setPemain("Udin");
    tim1[1].setPemain("Eko");
    tim1[2].setPemain("Bambang");
    tim1[3].setPemain("Rudi"); 
    tim1[4].setPemain("Eko");
    tim1[5].setPemain("Utomo");
    tim1[6].setPemain("Fandi");
    tim1[7].setPemain("Yayan");
    tim1[8].setPemain("Mad Dog");
    tim1[9].setPemain("Ruslan");
    tim1[10].setPemain("Jajang");
    
    cout << "Nama Tim : ";
	cout << a1.getNamaTim() << endl;
	cout << "Asal Negara : ";
	cout << a1.getNegaraTim() << endl;
	cout << "Tahun Berdiri : ";
	cout << a1.getTahunBerdiri() << endl;

	cout << "List Pemain : " << endl;
int i=0;
	for(i=0;i<11;i++){
		cout << tim1[i].getPemain() << endl;
	}


return 0;

}
