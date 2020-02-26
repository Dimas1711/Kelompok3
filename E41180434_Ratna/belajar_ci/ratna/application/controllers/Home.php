<?php
class Home extends CI_Controller { //mengextend CI_Controller
    public function index () {
        //cek apakah method = post
        if($this->input->method() == "post") {
            //tampilkan data
            echo "nama : " . this->input->post ("nama"). '<br>';
            echo  "email : ". this->input->post ("email") ;
        }
        $this->load->view("HomeView");

        /**$this->load->helper ("belajar") ;
        tampilkanTabel ("Politeknik Negeri Jember <br>");
        tampilkanMiring ("Jurusan Teknologi Informasi <br>");
        tampilkanBergaris ("2020 <br>");*/
       /**$this->load->helper ("form");
        echo form_open ('/');
        echo form_label ('Nama : ') . '<br>'; //membuat label
        echo form_input ('nama : ') . '<br>';  //membuat textbox
        echo form_label ('Alamat : ') . '<br>';//membuat label
        echo form_textarea ('alamat') . '<br>'; //membuat textbox
        echo form_submit('submit' , 'Kirim Data'); //membuat tabel
        echo form_close (); //menutup form*/
      /**$this->load->helper ("url"); //memanggil helper url
        echo site_url () . '<br>'; //lokasi website
        echo base_url (). '<br>'; //folder lokasi website
        echo current_url () . '<br>'; //url yang sedang dibuka
        echo anchor ('http://google.com', 'google.com') . '<br>';
        //membuat url
        echo anchor ('http://polije.ac.id', 'polije.ac.id');
       /**$this->load->helper ("number"); //memanggil helper number
        echo 'Ukuran GB : ' . byte_format (4512244422) . '<br>';
        echo 'Ukuran GB : ' . byte_format (52245023) . '<br>';
        echo 'Ukuran GB : ' . byte_format (145023);*/
    /**$this->load->helper ("html"); //memanggil helper html
    echo heading ('Selamat Datang!', 1); //heading
    echo ul (array ( //ol
        'kesatu',
        'kedua',
        'ketiga'
    )); */
    //$this->load->model ("DataModel"); //memanggil DataModel
    //$dataArr = $this->DataModel->getData();
    //menampung fungsi getData()
   /**echo "nama : " . $dataArr["nama"] . '<br>';
    echo "status : " . $dataArr["status"] . '<br>';
    echo "alamat : " . $dataArr["alamat"] . '<br>'; */

    //$this->load->view ("HomeView", array ("data" => $dataArr)); //memanggil Homeview

}
}
?>