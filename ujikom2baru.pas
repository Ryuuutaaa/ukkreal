program MenulisData;
uses crt;
var
   var_teks:TEXT;

begin
   clrscr;
   assign(var_teks,'Halo.txt');
   rewrite(var_teks);
   writeln(var_teks,'Halo ini program pertamaku');
   close(var_teks);
   readkey;
end.