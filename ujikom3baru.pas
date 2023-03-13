program MembacaData;
uses crt;
var
   var_teks:TEXT;
   pesan:STRING;

begin
   clrscr;
   assign(var_teks,'Halo.txt');
   reset(var_teks);
   while not eof (var_teks) do
      begin
         readln (var_teks, pesan);
         writeln (pesan);
      end;
   close(var_teks);
   readkey;
end.