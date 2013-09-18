<h2>Simulasi dengan Monte Carlo</h2>
<h3>17 September 2013</h3>
<h4>Empat Konsep yang Memudahkan Implementasi Metode Monte Carlo ke Berbagai Kasus</h4>
<p>
<p align="center"><img src="journal/mc.gif"/><br/><caption>Teknik Penghitungan Nilai PI dengan Metode Monte Carlo - Sumber Wikipedia</caption></p>
Metode simulasi ini dipergunakan secara khusus pada saat perancangan bomb atom yang meluluh-lantakkan Hiroshima-Nagasaki. Metode ini dipergunakan di pusat pengembangan bomb atom pertama di dunia tersebut, pada Manhattan Project. Metode ini menitik beratkan pada iterasi dalam jumlah yang tinggi pada suatu set probabilitas, untuk kemudian ditarik kesimpulan berdasarkan model yang disimulasikan. Dalam konteks ini, algoritma Monte-Carlo agak sulit didefinisikan, karena ia akan bergantung kepada kasus yang sedang dipecahkan. Namun secara umum, sifat-sifat yang melandasi metode ini adalah :
<ol>
     <li>Terdapat iterasi dalam jumlah ribuan kali. Semakin tinggi jumlah iterasi, maka hasil yang didapat akan lebih akurat. Namun sampai jumlah tertentu, tergantung model yang disimulasikan, maka hasilnya akan konvergen</li>
     <li>Dalam setiap iterasi dilakukan perhitungan yang sesuai dengan model yang sedang disimulasikan. Merupakan tugas awal yang harus dilakukan pengguna metode ini, adalah untuk mampu menerjemahkan kasus nyata yang sedang dihadapinya ke dalam formula matematika sesuai dengan bahasa pemrograman/tool komputasi yang dipakai </li>
     <li>Dalam setiap iterasi dibangkitkan bilangan random dengan sebaran acak, yang merupakan input untuk model matematika yang sudah dijabarkan. </li>
     <li>Proses berhenti jika jumlah iterasi telah diselesaikan, untuk kemudian hasil kalkulasi yang telah dikumpulkan sejumlah iterasi ini ditarik kesimpulannya</li>
</ol>

     Secara umum metode ini terasa ringan dan tidak begitu kompleks, dan memang demikianlah adanya. Kendala awal/kesulitan awal pada metode ini adalah keahlian yang harus dimiliki pengguna metode untuk dapat menerjemahkan kasus nyata yang sedang dihadapinya ke dalam bahasa pemrograman/tool komputasi yang dipakai. Adapun karena sifat iterasinya, maka hampir semua bahasa pemrograman bisa dipergunakan untuk mengimplementasikan Metode Monte Carlo ini, misalnya : Java, C++, Python, PHP, Excel/VBA/VB 6/VB.NET, atau pun R dan Matlab. 
</p>
<p>
     Popularitas Metode Monte Carlo ini karena di tahun 1940an tersebut, komputer masihlah barang langka yang kepemilikan/penggunaannya masih sangat eksklusif, sehingga metode yang bisa mengkalkulasi hingga ribuan kali masih terasa sangat super dan luar biasa. Sedangkan di era komputasi milenium ini, bahkan game-game online 3Dimensi yang sering dipakai anak-anak, sudah menggunakan iterasi berjumlah ribuan kali untuk proses renderingnya.
</p>
<h4>Referensi</h4>
<ul>
     <li><a href="http://excelmontecarlo.com/01_contents.html">Tutorial dengan Excel</a></li>
     <li><a href="http://stats.stackexchange.com/questions/17730/writing-a-monte-carlo-simulation-in-r">Penggunaan dengan tool R</a></li>
     <li><a href="http://en.wikipedia.org/wiki/Monte_carlo_method">Entry di Wikipedia tentang Monte Carlo</a></li>
     <li><a href="http://www.sitepoint.com/running-monte-carlo-simulations-in-php/">Artikel menarik ttg implementasi real Monte Carlo dengan PHP</a></li>
     <li><a href="http://alvinalexander.com/blog/post/java/java-based-monte-carlo-simulation-for-my-minority-report-problem">Pemecahan kasus Minority Report dengan Menggunakan Metode Monte Carlo, berbasis Java</a></li>
     <li><a href="http://www.solver.com/monte-carlo-simulation-tutorial">Berbagai kasus simulasi dengan Metode Monte Carlo, menggunakan Excel</a></li>
     <li><a href="http://stackoverflow.com/questions/2917371/why-use-monte-carlo-method">Kenapa menggunakan metode Monte Carlo?</a></li>
     <li><a href="http://stackoverflow.com/questions/9167586/monte-carlo-methods-in-graphics?rq=1">Metode Monte Carlo untuk optimisasi Kode</a></li>
     <li><a href="http://stackoverflow.com/questions/13461567/monte-carlo-method-in-python?rq=1">Metode Monte Carlo untuk Pemecahan Kasus Berapa Nilai Pi?</a></li>
</ul>