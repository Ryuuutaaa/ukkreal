program bacabaca;
uses crt;
const N: integer = 10;
var
        T: array[1..10]of integer;
        i, j: integer;

procedure bacaArray();
begin
        for i := 1 to N do
                begin
                        write('masukan array element ke-',i,': ');
                        read(T[i]);
                end;
end;

procedure cetakArray();
begin
        for i:= 1 to N do
                write(T[i],' ');
end;


function SortArray():boolean;
var     temp:integer;
        urut:boolean;
begin
        urut := true;
        for i:= 1 to N do
                for j := 1 to N-1 do
                        if T[j]>T[j+1] then
                                begin
                                        temp := T[j];
                                        T[j] := T[j+1];
                                        T[j+i] := temp;
                                        urut := false;
                                end;
                SortArray := urut;
end;

begin
        clrscr;
        bacaArray();
        cetakArray();
        if(SortArray=true) then
                writeln('Array sudah urut')
        else
                begin
                writeln(' Sorting Dilakukan');
                cetakArray();

                end;
        readkey;
end.
