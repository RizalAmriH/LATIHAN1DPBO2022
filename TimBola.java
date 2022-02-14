class TimBola{
    private String namaTim;
    private String negara;
    private String tahunBerdiri;
   
    TimBola(){    
    }


    class Pemain{
        private String pemain = null;

        Pemain(){
        }

        Pemain(String p ){
            this.pemain = p;
        }

        void setPemain(String p){
            this.pemain = p;
        }

        String getPemain(){
            return this.pemain;
        }

        

    }

    TimBola(String nT, String n, String tB){
        this.namaTim = nT;
        this.negara = n;
        this.tahunBerdiri = tB;
       
    }

    void setNama(String nT){
        this.namaTim = nT;
    }

    void setNegara(String n){
        this.negara = n;
    }

    void setTahunBerdiri(String tB){
        this.tahunBerdiri = tB;
    }

    

    String getNama(){
        return this.namaTim;
    }

    String getNegara(){
        return this.negara;
    }

    String getTahun(){
        return this.tahunBerdiri;
    }

   
    

}