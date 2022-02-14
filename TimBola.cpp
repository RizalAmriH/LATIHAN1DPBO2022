#include <iostream>
#include <string> 


using namespace std;

class TimBola{
    private:
    string namaTim;
    string negara;
    string tahunBerdiri;
    

    public:
    TimBola(){
    }
    
    class DaftarPemain{
    	private:
	    string pemain;

    	public:
    	DaftarPemain(){
    	}
	
	DaftarPemain(string p){
		pemain = p;
	}
	
	 void setPemain(string p){
        pemain = p;
    }
    
    string getPemain(){
        return pemain;
    }
	
		~DaftarPemain(){
		}
	};

    TimBola(string nT, string n, string tB){
        namaTim = nT;
        negara = n;
        tahunBerdiri = tB;
    
    }

    void setNamaTim(string nT){
        namaTim = nT;
    }

    void setTahunBerdiri(string tB){
        tahunBerdiri = tB;
    }

    void setNegaraTim(string n){
        negara = n;
    }

   

    string getNamaTim(){
        return namaTim;
    }

    string getTahunBerdiri(){
        return tahunBerdiri;
    }

    string getNegaraTim(){
        return negara;
    }

   
    ~TimBola(){
    }

};
