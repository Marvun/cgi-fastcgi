#!F:\xampp\perl\bin\perl.exe
use strict;
use warnings;

use FCGI qw(:standard);
use CGI qw(:standard);

while(FCGI::Request()->Accept() >= 0) {
    my $bananaAmount = param("banana");
    my $appleAmount = param("apple");
    my $amount = $bananaAmount + $appleAmount;
    print header;

    print start_html("Kasse");
    print h2("Die Anzahl der Artikel ist: $amount");
    print end_html;
}



