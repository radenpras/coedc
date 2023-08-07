

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CO EDC Lebak</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Agdasima&family=Poppins&display=swap');
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(to bottom right, #70c1ff, #498ffc);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }
  
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
  }
  
  .card {
    width: 350px;
    background-color: rgba(255, 255, 255, 0.3);
    border-radius: 15px;
    padding: 25px;
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }
  
  h2 {
    color: #fff;
    text-align: center;
    margin-bottom: 20px;
  }
  
  form {
    display: flex;
    flex-direction: column;
  }
  
  label {
    color: #fff;
    margin-bottom: 5px;
  }
  
  input {
    padding: 10px;
    margin-bottom: 10px;
    border: none;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.8);
  }
  
  button {
    padding: 10px;
    background-color: #fff;
    color: #70c1ff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  button:hover {
    background-color: white;
  }
  
  @media (max-width: 480px) {
    .card {
      width: 100%;
      max-width: 350px;
    }
  }

  h1 {
  	color: white;
  	text-align: center;
  }


  .standard-btn-coloured {
  text-decoration:none;
  background:#fff;
  padding:10px 20px 10px 20px;
  border-radius:5px;
  color:#70c1ff;
  margin:5px;
  text-align: center;
  font-size: 12px;
}

.btn-lg {
padding:10px 20px 10px 20px;
}

select {
    display: none !important;
}

.dropdown-select {
    background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0) 100%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#40FFFFFF', endColorstr='#00FFFFFF', GradientType=0);
    background-color: #fff;
    border-radius: 6px;
    border: solid 1px #eee;
    box-shadow: 0px 2px 5px 0px rgba(155, 155, 155, 0.5);
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    float: left;
    font-size: 14px;
    font-weight: normal;
    height: 42px;
    line-height: 40px;
    outline: none;
    padding-left: 18px;
    padding-right: 30px;
    position: relative;
    text-align: left !important;
    transition: all 0.2s ease-in-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    white-space: nowrap;
    width: auto;

}

.dropdown-select:focus {
    background-color: #fff;
}

.dropdown-select:hover {
    background-color: #fff;
}

.dropdown-select:active,
.dropdown-select.open {
    background-color: #fff !important;
    border-color: #bbb;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05) inset;
}

.dropdown-select:after {
    height: 0;
    width: 0;
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-top: 4px solid #777;
    -webkit-transform: origin(50% 20%);
    transform: origin(50% 20%);
    transition: all 0.125s ease-in-out;
    content: '';
    display: block;
    margin-top: -2px;
    pointer-events: none;
    position: absolute;
    right: 10px;
    top: 50%;
}

.dropdown-select.open:after {
    -webkit-transform: rotate(-180deg);
    transform: rotate(-180deg);
}

.dropdown-select.open .list {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
    pointer-events: auto;
}

.dropdown-select.open .option {
    cursor: pointer;
}

.dropdown-select.wide {
    width: 100%;
}

.dropdown-select.wide .list {
    left: 0 !important;
    right: 0 !important;
}

.dropdown-select .list {
    box-sizing: border-box;
    transition: all 0.15s cubic-bezier(0.25, 0, 0.25, 1.75), opacity 0.1s linear;
    -webkit-transform: scale(0.75);
    transform: scale(0.75);
    -webkit-transform-origin: 50% 0;
    transform-origin: 50% 0;
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.09);
    background-color: #fff;
    border-radius: 6px;
    margin-top: 4px;
    padding: 3px 0;
    opacity: 0;
    overflow: hidden;
    pointer-events: none;
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 999;
    max-height: 250px;
    overflow: auto;
    border: 1px solid #ddd;
}

.dropdown-select .list:hover .option:not(:hover) {
    background-color: transparent !important;
}
.dropdown-select .dd-search{
  overflow:hidden;
  display:flex;
  align-items:center;
  justify-content:center;
  margin:0.5rem;
}

.dropdown-select .dd-searchbox{
  width:90%;
  padding:0.5rem;
  border:1px solid #999;
  border-color:#999;
  border-radius:4px;
  outline:none;
}
.dropdown-select .dd-searchbox:focus{
  border-color:#12CBC4;
}

.dropdown-select .list ul {
    padding: 0;
}

.dropdown-select .option {
    cursor: default;
    font-weight: 400;
    line-height: 40px;
    outline: none;
    padding-left: 18px;
    padding-right: 29px;
    text-align: left;
    transition: all 0.2s;
    list-style: none;
}

.dropdown-select .option:hover,
.dropdown-select .option:focus {
    background-color: #f6f6f6 !important;
}

.dropdown-select .option.selected {
    font-weight: 600;
    color: #12cbc4;
}

.dropdown-select .option.selected:focus {
    background: #f6f6f6;
}

.dropdown-select a {
    color: #aaa;
    text-decoration: none;
    transition: all 0.2s ease-in-out;
}

.dropdown-select a:hover {
    color: #666;
}

</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">
   <div class="container">
  <div class="card">
  <h1>Complain EDC BCA</h1>
<form id="messageForm" onsubmit="myFunction()">
   

<label for="username">Kode Toko</label>
    
          <select name="Kode Toko">
     <option value="F1XC - RAYA MAJA">F1XC - RAYA MAJA</option>
<option value="FO5W - MUTIARA MAJA">FO5W - MUTIARA MAJA</option>
<option value="FQ92 - MAJA LEBAK">FQ92 - MAJA LEBAK</option>
<option value="FUN8 - MAJA LEBAK 2">FUN8 - MAJA LEBAK 2</option>
<option value="FWJN - CITRA MAJA">FWJN - CITRA MAJA</option>
<option value="TJ2P - CILAYANG LEBAK">TJ2P - CILAYANG LEBAK</option>
<option value="TQA7 - CIBEDIL LEBAK">TQA7 - CIBEDIL LEBAK</option>
<option value="FE0T - RUKO MUTIARA SAPHIRE">FE0T - RUKO MUTIARA SAPHIRE</option>
<option value="TQ6X - RAYA MAJA JASINGA KM 01">TQ6X - RAYA MAJA JASINGA KM 01</option>
<option value="TG5K - RAYA MAJA PAPANGGO">TG5K - RAYA MAJA PAPANGGO</option>
<option value="T42E - SILIWANGI LEBAK">T42E - SILIWANGI LEBAK</option>
<option value="TCTD - PAHLAWAN RANGKAS">TCTD - PAHLAWAN RANGKAS</option>
<option value="TD04 - KOMPLEK PENDIDIKAN RANGKAS">TD04 - KOMPLEK PENDIDIKAN RANGKAS</option>
<option value="TL83 - SA. TIRTAYASA RANGKAS">TL83 - SA. TIRTAYASA RANGKAS</option>
<option value="T1PM - SUNAN KALIJAGA 2">T1PM - SUNAN KALIJAGA 2</option>
<option value="T8BS - SUNAN KALIJAGA 276">T8BS - SUNAN KALIJAGA 276</option>
<option value="TP61 - SUNAN KALIJAGA">TP61 - SUNAN KALIJAGA</option>
<option value="TCGY - LEBAK PICUNG RANGKAS">TCGY - LEBAK PICUNG RANGKAS</option>
<option value="F8E2 - RANGKAS NARIMBANG MULYA">F8E2 - RANGKAS NARIMBANG MULYA</option>
<option value="FAGD - CIKANDE GRIYA ASRI">FAGD - CIKANDE GRIYA ASRI</option>
<option value="T7B4 - BANJARSARI">T7B4 - BANJARSARI</option>
<option value="FP7U - JUNTI ASRI">FP7U - JUNTI ASRI</option>
<option value="T5YT - KP PABUARAN CIKANDE">T5YT - KP PABUARAN CIKANDE</option>
<option value="TF2O - KAMPUNG GABUS">TF2O - KAMPUNG GABUS</option>
<option value="TLLP - RAYA CIKANDE RANGKAS KM3">TLLP - RAYA CIKANDE RANGKAS KM3</option>
<option value="TQH8 - SENOPATI CIKANDE">TQH8 - SENOPATI CIKANDE</option>
<option value="TY3K - PERUM CIKANDE PERMAI2">TY3K - PERUM CIKANDE PERMAI2</option>
<option value="T6KN - RAYA CIKANDE KM 37">T6KN - RAYA CIKANDE KM 37</option>
<option value="TMAW - CIKANDE PERMAI BLOK R">TMAW - CIKANDE PERMAI BLOK R</option>
<option value="TLJ6 - MAJA KOPO">TLJ6 - MAJA KOPO</option>
<option value="TOGL - RAYA MAJA KOPO KM.1 ">TOGL - RAYA MAJA KOPO KM.1 </option>
<option value="TY7A - BINONG PAMARAYAN">TY7A - BINONG PAMARAYAN</option>
<option value="FUXD - PAMARAYAN">FUXD - PAMARAYAN</option>
<option value="TV2Y - NYOMPOK SERANG">TV2Y - NYOMPOK SERANG</option>
<option value="TBWA - CITRA MAJA BOULEVARD A01">TBWA - CITRA MAJA BOULEVARD A01</option>
<option value="FW6U - JAWILAN">FW6U - JAWILAN</option>
<option value="RQBW - CRM JAWILAN">RQBW - CRM JAWILAN</option>
<option value="F2JO - PARAKAN">F2JO - PARAKAN</option>
<option value="TX0T - KAREO JAWILAN">TX0T - KAREO JAWILAN</option>
<option value="FE5M - CIKANDE KM 10">FE5M - CIKANDE KM 10</option>
<option value="T2ET - IR SOETAMI RANGKAS">T2ET - IR SOETAMI RANGKAS</option>
<option value="FGJB - RAYA CIKANDE">FGJB - RAYA CIKANDE</option>
<option value="T3CV - PARK VILLE CITRA MAJA">T3CV - PARK VILLE CITRA MAJA</option>
<option value="THUT - PARK LANE CITRA MAJA">THUT - PARK LANE CITRA MAJA</option>
<option value="F6R5 - NAMENG">F6R5 - NAMENG</option>
<option value="FVSB - SPBU CISALAM">FVSB - SPBU CISALAM</option>
<option value="TF5R - JENDRAL SUDIRMAN LEBAK">TF5R - JENDRAL SUDIRMAN LEBAK</option>
<option value="F6TD - PASAR JIPUT">F6TD - PASAR JIPUT</option>
<option value="TMMT - CENING">TMMT - CENING</option>
<option value="T8WF - SOGE PANIMBANG">T8WF - SOGE PANIMBANG</option>
<option value="TCEH - TELUK LADA SOBANG">TCEH - TELUK LADA SOBANG</option>
<option value="TP8A - PANIMBANG JAYA">TP8A - PANIMBANG JAYA</option>
<option value="TRAE - CIPUTRI">TRAE - CIPUTRI</option>
<option value="FPAC - PEREMPATAN CIKEDAL">FPAC - PEREMPATAN CIKEDAL</option>
<option value="T7QX - MENES 20A">T7QX - MENES 20A</option>
<option value="F68G - KORANJI PANDEGLANG">F68G - KORANJI PANDEGLANG</option>
<option value="TO3V - KADUDAMPIT">TO3V - KADUDAMPIT</option>
<option value="TVTS - BABAKAN LOR">TVTS - BABAKAN LOR</option>
<option value="F53Y - PERINTIS LABUAN">F53Y - PERINTIS LABUAN</option>
<option value="FLEO - PAGELARAN">FLEO - PAGELARAN</option>
<option value="TAVZ - PANIMBANG SIDAMUKTI">TAVZ - PANIMBANG SIDAMUKTI</option>
<option value="TD6I - BAMA PANDEGLANG">TD6I - BAMA PANDEGLANG</option>
<option value="FI9D - PASAR SOBANG">FI9D - PASAR SOBANG</option>
<option value="T4EB - PERTIGAAN CISEUKEUT">T4EB - PERTIGAAN CISEUKEUT</option>
<option value="F57V - PASAR CITEREUP">F57V - PASAR CITEREUP</option>
<option value="F98Q - SUMUR PANDEGLANG">F98Q - SUMUR PANDEGLANG</option>
<option value="TGXH - CITEUREP RAYA">TGXH - CITEUREP RAYA</option>
<option value="FVSU - RAYA PANIMBANG SUMUR ">FVSU - RAYA PANIMBANG SUMUR </option>
<option value="T2SM - MENES">T2SM - MENES</option>
<option value="FEWW - SAKETI">FEWW - SAKETI</option>
<option value="FFP0 - PASAR SABUT SAKETI">FFP0 - PASAR SABUT SAKETI</option>
<option value="FLWP - MENES 2">FLWP - MENES 2</option>
<option value="TJCK - RAYA MANDALAWANGI KM 10">TJCK - RAYA MANDALAWANGI KM 10</option>
<option value="FL3K - A M ROZI TAMAN JAYA">FL3K - A M ROZI TAMAN JAYA</option>
<option value="TU7D - MANDALAWANGI">TU7D - MANDALAWANGI</option>
<option value="FDJI - CIPEUCANG">FDJI - CIPEUCANG</option>
<option value="TUZ5 - BABAKAN SOMPOK">TUZ5 - BABAKAN SOMPOK</option>
<option value="TT51 - CIKADUEN">TT51 - CIKADUEN</option>
<option value="F32F - LABUAN II">F32F - LABUAN II</option>
<option value="TT9X - SUMUR KOPO LABUAN">TT9X - SUMUR KOPO LABUAN</option>
<option value="TSAO - KARABOHONG">TSAO - KARABOHONG</option>
<option value="TBBD - CARINGIN">TBBD - CARINGIN</option>
<option value="F778 - CARITA">F778 - CARITA</option>
<option value="RXZS - CRM CARITA">RXZS - CRM CARITA</option>
<option value="T2EC - LABUAN 5">T2EC - LABUAN 5</option>
<option value="T2ZV - CARITA 2">T2ZV - CARITA 2</option>
<option value="TVW5 - PASAURAN">TVW5 - PASAURAN</option>
<option value="TZZK - RAYA ANYER CIPACUNG">TZZK - RAYA ANYER CIPACUNG</option>
<option value="F2B1 - SAKETI 2">F2B1 - SAKETI 2</option>
<option value="FDYO - MUNJUL">FDYO - MUNJUL</option>
<option value="T7Y0 - BOJONG PANDEGLANG">T7Y0 - BOJONG PANDEGLANG</option>
<option value="TBUK - KADUHEJO BOJONG">TBUK - KADUHEJO BOJONG</option>
<option value="THPS - RAYA MUNJUL KM 1">THPS - RAYA MUNJUL KM 1</option>
<option value="FM19 - CIGEULIS 2">FM19 - CIGEULIS 2</option>
<option value="FO35 - CIBALIUNG">FO35 - CIBALIUNG</option>
<option value="FZ9R - CIBALIUNG 2">FZ9R - CIBALIUNG 2</option>
<option value="TBQF - CIGEULIS PANDEGLANG">TBQF - CIGEULIS PANDEGLANG</option>
<option value="TTXR - BUMI CIKANDE INDAH">TTXR - BUMI CIKANDE INDAH</option>
<option value="FQJR - LEUWILIMUS CIKANDE">FQJR - LEUWILIMUS CIKANDE</option>
<option value="THVP - MODERN CIKANDE">THVP - MODERN CIKANDE</option>
<option value="TTH7 - RAYA SERANG KM 65">TTH7 - RAYA SERANG KM 65</option>
<option value="T0QM - CIKANDE KOPER">T0QM - CIKANDE KOPER</option>
<option value="TM9S - KAMPUNG AMBON">TM9S - KAMPUNG AMBON</option>
<option value="TZKS - PARIGI CIKANDE">TZKS - PARIGI CIKANDE</option>
<option value="F594 - CIKANDE PERMAI">F594 - CIKANDE PERMAI</option>
<option value="T4FD - CIKANDE PERMAI A1">T4FD - CIKANDE PERMAI A1</option>
<option value="R028 - CRM CIKANDE PERMAI">R028 - CRM CIKANDE PERMAI</option>
<option value="T1Q5 - RAYA KRAGILAN">T1Q5 - RAYA KRAGILAN</option>
<option value="TBS8 - RAYA SENTUL KRAGILAN">TBS8 - RAYA SENTUL KRAGILAN</option>
<option value="TZO1 - KRAGILAN 3">TZO1 - KRAGILAN 3</option>
<option value="TNS5 - JONGJING KRAGILAN">TNS5 - JONGJING KRAGILAN</option>
<option value="FQ4Z - PERUM CIUJUNG INDAH RESIDENCE">FQ4Z - PERUM CIUJUNG INDAH RESIDENCE</option>
<option value="TGLC - KRAGILAN">TGLC - KRAGILAN</option>
<option value="T42I - RAYA JAKARTA KM 14.5">T42I - RAYA JAKARTA KM 14.5</option>
<option value="TG5O - GRAND SUTERA KRAGILAN">TG5O - GRAND SUTERA KRAGILAN</option>
<option value="TY2P - RAYA CARENANG">TY2P - RAYA CARENANG</option>
<option value="TJAN - RAYA SELIKUR KM 3.7">TJAN - RAYA SELIKUR KM 3.7</option>
<option value="TFZ9 - SELIKUR SUKA MAJU">TFZ9 - SELIKUR SUKA MAJU</option>
<option value="F0QY - CIAGEL KIBIN">F0QY - CIAGEL KIBIN</option>
<option value="TZ1T - SPBU CIAGEL KIBIN">TZ1T - SPBU CIAGEL KIBIN</option>
<option value="TJNU - KEDINDING KIBIN 2">TJNU - KEDINDING KIBIN 2</option>
<option value="FTLM - METROPOLIS RESIDENCE">FTLM - METROPOLIS RESIDENCE</option>
<option value="F71Q - NIKO MAS">F71Q - NIKO MAS</option>
<option value="TXD1 - POS TAMBAK">TXD1 - POS TAMBAK</option>
<option value="TATD - RAYA SERANG GORDA">TATD - RAYA SERANG GORDA</option>
<option value="T229 - TAMBAK MANDAUNG">T229 - TAMBAK MANDAUNG</option>
<option value="T5KJ - TAMBAK PAMARAYAN KM1">T5KJ - TAMBAK PAMARAYAN KM1</option>
<option value="T95V - TAMBAK SERANG KM 71">T95V - TAMBAK SERANG KM 71</option>
<option value="TVQT - RAYA SELIKUR KM 7.5">TVQT - RAYA SELIKUR KM 7.5</option>
<option value="T0UK - PONTANG- TPAA">T0UK - PONTANG- TPAA</option>
<option value="T4PH - RAYA CIPTAYASA KM 12">T4PH - RAYA CIPTAYASA KM 12</option>
<option value="TIGT - RAYA PONTANG">TIGT - RAYA PONTANG</option>
<option value="TSLC - SUJUNG TIRTAYASA">TSLC - SUJUNG TIRTAYASA</option>
<option value="F940 - SULTAN AGENG TIRTAYASA">F940 - SULTAN AGENG TIRTAYASA</option>
<option value="TWK2 - TANARA">TWK2 - TANARA</option>
<option value="TCRJ - TIRTAYASA PONTANG 2">TCRJ - TIRTAYASA PONTANG 2</option>
<option value="F4VR - GORDA SERANG">F4VR - GORDA SERANG</option>
<option value="T13J - MAJA GORDA">T13J - MAJA GORDA</option>
<option value="F554 - CIKANDE 2">F554 - CIKANDE 2</option>
<option value="F1X9 - INDUSTRI MODERN CIKANDE">F1X9 - INDUSTRI MODERN CIKANDE</option>
<option value="FG8H - NAMBO ILIR">FG8H - NAMBO ILIR</option>
<option value="FEJY - NAMBO UDIK">FEJY - NAMBO UDIK</option>
<option value="TRS1 - RAYA SERANG-JKT KM 68 NO 7">TRS1 - RAYA SERANG-JKT KM 68 NO 7</option>
<option value="FGPK - PURI KENCANA">FGPK - PURI KENCANA</option>
<option value="TGC4 - TAMBAK PAMARAYAN KM 7">TGC4 - TAMBAK PAMARAYAN KM 7</option>
<option value="FU0K - PURI MAS">FU0K - PURI MAS</option>
<option value="TIXP - JULANG CIKANDE">TIXP - JULANG CIKANDE</option>
<option value="FMLX - BUMI NAGARA LESTARI">FMLX - BUMI NAGARA LESTARI</option>
<option value="TCUT - WARINGIN KURUNG 2">TCUT - WARINGIN KURUNG 2</option>
<option value="F3FO - TAMAN KRAKATAU 2">F3FO - TAMAN KRAKATAU 2</option>
<option value="F68U - KRAKATAU">F68U - KRAKATAU</option>
<option value="TB8A - TAMAN KRAKATAU">TB8A - TAMAN KRAKATAU</option>
<option value="TEIC - SUKABARES WARINGIN KURUNG">TEIC - SUKABARES WARINGIN KURUNG</option>
<option value="T92P - RUKO BKP">T92P - RUKO BKP</option>
<option value="T9V2 - LINGKAR SELATAN KM 1">T9V2 - LINGKAR SELATAN KM 1</option>
<option value="TC3J - SERDANG METROPOLIS">TC3J - SERDANG METROPOLIS</option>
<option value="TE8V - SPBU LINGKAR SELATAN">TE8V - SPBU LINGKAR SELATAN</option>
<option value="TS3W - GADING PARK 3-5">TS3W - GADING PARK 3-5</option>
<option value="TV6G - GRIYA SERDANG INDAH">TV6G - GRIYA SERDANG INDAH</option>
<option value="TNEU - BUNDARAN PCI">TNEU - BUNDARAN PCI</option>
<option value="TUBI - RANCA TALES">TUBI - RANCA TALES</option>
<option value="T1Y1 - TAKTAKAN 3">T1Y1 - TAKTAKAN 3</option>
<option value="T3B5 - RAYA TAKTAKAN CILOWONG">T3B5 - RAYA TAKTAKAN CILOWONG</option>
<option value="T50E - TAKTAKAN 1">T50E - TAKTAKAN 1</option>
<option value="T9DK - TOL SERANG BARAT">T9DK - TOL SERANG BARAT</option>
<option value="TEMB - RAYA TAKTAKAN">TEMB - RAYA TAKTAKAN</option>
<option value="TK7B - TAKTAKAN PANGGUNG JATI">TK7B - TAKTAKAN PANGGUNG JATI</option>
<option value="TMMS - SERANG CITY">TMMS - SERANG CITY</option>
<option value="TQG0 - CILEGON KM 6">TQG0 - CILEGON KM 6</option>
<option value="TSS6 - TAMAN PESONA">TSS6 - TAMAN PESONA</option>
<option value="TVXD - ALAM LESTARI">TVXD - ALAM LESTARI</option>
<option value="TBGR - PIRANHA CILEGON">TBGR - PIRANHA CILEGON</option>
<option value="TEEC - BUKIT BAJA">TEEC - BUKIT BAJA</option>
<option value="TLUI - RAYA BAGENDUNG">TLUI - RAYA BAGENDUNG</option>
<option value="TRIS - RUKO RAKATA ASRI">TRIS - RUKO RAKATA ASRI</option>
<option value="TY5K - BUKIT BAJA CILEGON">TY5K - BUKIT BAJA CILEGON</option>
<option value="T0P6 - BUKIT CILEGON ASRI 3-4">T0P6 - BUKIT CILEGON ASRI 3-4</option>
<option value="FAE3 - PCI RAYA">FAE3 - PCI RAYA</option>
<option value="FCD3 - RUKO GRAND CILEGON">FCD3 - RUKO GRAND CILEGON</option>
<option value="RCQ8 - CRM PONDOK CILEGON INDAH">RCQ8 - CRM PONDOK CILEGON INDAH</option>
<option value="T2I9 - CIBEBER">T2I9 - CIBEBER</option>
<option value="TFBK - PERUMNAS CIBEBER">TFBK - PERUMNAS CIBEBER</option>
<option value="TFDQ - PONDOK CILEGON INDAH 2">TFDQ - PONDOK CILEGON INDAH 2</option>
<option value="TYX0 - PCI BLOK B9 NO 9">TYX0 - PCI BLOK B9 NO 9</option>
<option value="T2UB - LINGKAR SELATAN KM 0.5">T2UB - LINGKAR SELATAN KM 0.5</option>
<option value="F117 - WARINGIN KURUNG">F117 - WARINGIN KURUNG</option>
<option value="F392 - KRAMAT WATU">F392 - KRAMAT WATU</option>
<option value="FRDK - WANAYASA">FRDK - WANAYASA</option>
<option value="T6CD - PELAMUNAN KRAMATWATU">T6CD - PELAMUNAN KRAMATWATU</option>
<option value="T86W - KRAMAT WATU 2">T86W - KRAMAT WATU 2</option>
<option value="T9ZR - PERUM BMW SERANG">T9ZR - PERUM BMW SERANG</option>
<option value="TCE3 - PELAMUNAN">TCE3 - PELAMUNAN</option>
<option value="TIK7 - RAYA SERANG CILEGON KM 19">TIK7 - RAYA SERANG CILEGON KM 19</option>
<option value="TJM4 - KRAMAT WATU 3">TJM4 - KRAMAT WATU 3</option>
<option value="TRRH - RAYA SERDANG KRAMATWATU">TRRH - RAYA SERDANG KRAMATWATU</option>
<option value="F0B8 - BHAYANGKARA">F0B8 - BHAYANGKARA</option>
<option value="F39A - SERANG BARU">F39A - SERANG BARU</option>
<option value="FFKK - RAYA BHAYANGKARA">FFKK - RAYA BHAYANGKARA</option>
<option value="R6CX - CRM SERANG HIJAU">R6CX - CRM SERANG HIJAU</option>
<option value="T1E7 - PUSRI BANJARSARI">T1E7 - PUSRI BANJARSARI</option>
<option value="TIAJ - JENDRAL SUDIRMAN">TIAJ - JENDRAL SUDIRMAN</option>
<option value="TN62 - CIPOCOK KM 2">TN62 - CIPOCOK KM 2</option>
<option value="TV3M - RAYA JENDRAL SUDIRMAN">TV3M - RAYA JENDRAL SUDIRMAN</option>
<option value="TVWS - PUSRI KEMANG">TVWS - PUSRI KEMANG</option>
<option value="T19D - BHAYANGKARA SERANG">T19D - BHAYANGKARA SERANG</option>
<option value="FP8T - RAYA BHAYANGKARA KUBIL">FP8T - RAYA BHAYANGKARA KUBIL</option>
<option value="FI00 - ABDUL KHATIB">FI00 - ABDUL KHATIB</option>
<option value="TFHX - RUKO TAMAN SARI">TFHX - RUKO TAMAN SARI</option>
<option value="TJUE - DIPENOGORO">TJUE - DIPENOGORO</option>
<option value="TCZ7 - JALAN RAYA CIWARU SERANG">TCZ7 - JALAN RAYA CIWARU SERANG</option>
<option value="FXHI - SAYABULU">FXHI - SAYABULU</option>
<option value="FQ93 - ABDUL HADI ">FQ93 - ABDUL HADI </option>
<option value="TLWZ - RAYA PANDEGLANG SERANG KM 1">TLWZ - RAYA PANDEGLANG SERANG KM 1</option>
<option value="T4IB - TEMBONG JAYA">T4IB - TEMBONG JAYA</option>
<option value="TD1S - RAYA SYEH NAWAWI CILAKU ">TD1S - RAYA SYEH NAWAWI CILAKU </option>
<option value="F280 - RSUD SERANG ">F280 - RSUD SERANG </option>
<option value="T2EY - MAULANA HASANUDIN SERANG 146">T2EY - MAULANA HASANUDIN SERANG 146</option>
<option value="FXAQ - KALORAN">FXAQ - KALORAN</option>
<option value="TPWC - RAYA LETNAN JIDUN">TPWC - RAYA LETNAN JIDUN</option>
<option value="TSGE - RAYA EMPAT LIMA SERANG">TSGE - RAYA EMPAT LIMA SERANG</option>
<option value="F2XT - SPBU LONTAR ">F2XT - SPBU LONTAR </option>
<option value="FZ29 - AL AZHAR SERANG">FZ29 - AL AZHAR SERANG</option>
<option value="TCL6 - RAYA JAYADININGRAT">TCL6 - RAYA JAYADININGRAT</option>
<option value="TK0F - RAYA MAYOR SAFEI">TK0F - RAYA MAYOR SAFEI</option>
<option value="F3UI - LETNAN JIDUN">F3UI - LETNAN JIDUN</option>
<option value="TZ4V - RAYA KEAGUNGAN SERANG">TZ4V - RAYA KEAGUNGAN SERANG</option>
<option value="F9S8 - GRAHA DALUNG RESIDENCE">F9S8 - GRAHA DALUNG RESIDENCE</option>
<option value="FGML - GRIYA PERMATA ASRI SERANG">FGML - GRIYA PERMATA ASRI SERANG</option>
<option value="FSMU - TAMAN GRAHA ASRI">FSMU - TAMAN GRAHA ASRI</option>
<option value="TGDA - PUSPA REGENCY">TGDA - PUSPA REGENCY</option>
<option value="TIM4 - SEPANG MOUNTAIN">TIM4 - SEPANG MOUNTAIN</option>
<option value="T1DO - SPBU CIRACAS">T1DO - SPBU CIRACAS</option>
<option value="T38E - LINGKAR SELATAN">T38E - LINGKAR SELATAN</option>
<option value="TD4N - CIRACAS SERANG">TD4N - CIRACAS SERANG</option>
<option value="TWDW - TB SUWANDI SERANG">TWDW - TB SUWANDI SERANG</option>
<option value="T0A2 - MALL SERANG">T0A2 - MALL SERANG</option>
<option value="T40I - TIRTAYASA SERANG">T40I - TIRTAYASA SERANG</option>
<option value="T4EC - SAMAUN SERANG ">T4EC - SAMAUN SERANG </option>
<option value="TIG9 - RAYA BANTEN KEBAHARAN">TIG9 - RAYA BANTEN KEBAHARAN</option>
<option value="TIKX - KITAPA SERANG">TIKX - KITAPA SERANG</option>
<option value="TLM1 - RAYA SEMAUN BAKRI">TLM1 - RAYA SEMAUN BAKRI</option>
<option value="TP8C - PLUS LOPANG INDAH">TP8C - PLUS LOPANG INDAH</option>
<option value="FTE5 - GARUDA MUNCANG">FTE5 - GARUDA MUNCANG</option>
<option value="T5O6 - STASIUN SERANG">T5O6 - STASIUN SERANG</option>
<option value="T65O - A YANI NO 47 SERANG">T65O - A YANI NO 47 SERANG</option>
<option value="FQ4X - PERUM BANJARSARI">FQ4X - PERUM BANJARSARI</option>
<option value="TJNT - SYEH NAWAWI 2">TJNT - SYEH NAWAWI 2</option>
<option value="TXZO - SYEH NAWAWI ">TXZO - SYEH NAWAWI </option>
<option value="T0CF - RAYA CIPOCOK PETIR KM. 3.5">T0CF - RAYA CIPOCOK PETIR KM. 3.5</option>
<option value="T1I8 - PERMATA BANJAR ASRI">T1I8 - PERMATA BANJAR ASRI</option>
<option value="TX8D - RAYA PETIR KM 3">TX8D - RAYA PETIR KM 3</option>
<option value="TMWK - PERUM PERMATA BANJAR ASRI">TMWK - PERUM PERMATA BANJAR ASRI</option>
<option value="T61A - RAYA SYEH NAWAWI KM 5">T61A - RAYA SYEH NAWAWI KM 5</option>
<option value="FEQJ - SPBU CIPOCOK">FEQJ - SPBU CIPOCOK</option>
<option value="F777 - CITRA GADING">F777 - CITRA GADING</option>
<option value="TNEW - CIPOCOK ">TNEW - CIPOCOK </option>
<option value="F59A - TAMAN BANTEN LESTARI">F59A - TAMAN BANTEN LESTARI</option>
<option value="FE56 - LEBAK INDAH">FE56 - LEBAK INDAH</option>
<option value="FO2Y - BANTEN INDAH PERMAI">FO2Y - BANTEN INDAH PERMAI</option>
<option value="FVLJ - REST AREA KM 68 B">FVLJ - REST AREA KM 68 B</option>
<option value="FVM5 - MUTIARA INDAH SERANG">FVM5 - MUTIARA INDAH SERANG</option>
<option value="T1I9 - WARUNG JAUD II">T1I9 - WARUNG JAUD II</option>
<option value="TDDD - PRIYAYI SERANG">TDDD - PRIYAYI SERANG</option>
<option value="TEB7 - TOL SERANG TIMUR">TEB7 - TOL SERANG TIMUR</option>
<option value="TNHX - KESAWON SERANG">TNHX - KESAWON SERANG</option>
<option value="TS7R - TAMAN BANTEN LESTARI 2">TS7R - TAMAN BANTEN LESTARI 2</option>
<option value="TG2T - TAMAN MUTIARA INDAH 2">TG2T - TAMAN MUTIARA INDAH 2</option>
<option value="F1JO - PERUM PURI KANAKA">F1JO - PERUM PURI KANAKA</option>
<option value="F42A - TAKTAKAN II">F42A - TAKTAKAN II</option>
<option value="TLQH - SEPANG SEVIRA">TLQH - SEPANG SEVIRA</option>
<option value="T04M - TAMAN PURI INDAH 17 SERANG">T04M - TAMAN PURI INDAH 17 SERANG</option>
<option value="T05E - TITAN ARUM">T05E - TITAN ARUM</option>
<option value="T6W3 - LEGOK SERANG">T6W3 - LEGOK SERANG</option>
<option value="T86N - WIDYA ASRI">T86N - WIDYA ASRI</option>
<option value="T8SF - RAYA KURANJI SERANG">T8SF - RAYA KURANJI SERANG</option>
<option value="TAV6 - BUMI SERANG DAMAI">TAV6 - BUMI SERANG DAMAI</option>
<option value="TUO3 - TAMAN PURI INDAH SERANG">TUO3 - TAMAN PURI INDAH SERANG</option>
<option value="TVPE - SIMPANG LIMA">TVPE - SIMPANG LIMA</option>
<option value="F00E - KARANG ANTU">F00E - KARANG ANTU</option>
<option value="THAQ - KELAPA DUA SERANG">THAQ - KELAPA DUA SERANG</option>
<option value="FSE6 - PURI DELTA">FSE6 - PURI DELTA</option>
<option value="T29E - KASEMEN">T29E - KASEMEN</option>
<option value="T3YO - BANTEN KASUNYATAN">T3YO - BANTEN KASUNYATAN</option>
<option value="T9B3 - RAYA BANTEN">T9B3 - RAYA BANTEN</option>
<option value="TFT1 - KARANG SERANG">TFT1 - KARANG SERANG</option>
<option value="THVC - RAYA CILEGON SERANG KM 3">THVC - RAYA CILEGON SERANG KM 3</option>
<option value="TJCT - RAYA BANTEN KASEMEN">TJCT - RAYA BANTEN KASEMEN</option>
<option value="TOX0 - RAYA KELAPA DUA SERANG">TOX0 - RAYA KELAPA DUA SERANG</option>
<option value="TZ2T - BIO BANTEN">TZ2T - BIO BANTEN</option>
<option value="FRS9 - RUKO SEION BLOK K2 NO 7-8">FRS9 - RUKO SEION BLOK K2 NO 7-8</option>
<option value="T182 - ABDUL LATIEF NO 62">T182 - ABDUL LATIEF NO 62</option>
<option value="T2O1 - BUNDERAN CICERI">T2O1 - BUNDERAN CICERI</option>
<option value="T46E - TRIP JAMAKSARI 2 ">T46E - TRIP JAMAKSARI 2 </option>
<option value="T7X8 - KYAI HAJI SOKHARI 50">T7X8 - KYAI HAJI SOKHARI 50</option>
<option value="TFS4 - CICERI">TFS4 - CICERI</option>
<option value="TGOW - FATAH HASAN 14">TGOW - FATAH HASAN 14</option>
<option value="TPEJ - CIMUNCANG SERANG">TPEJ - CIMUNCANG SERANG</option>
<option value="TPSN - RAYA ABDUL LATIF">TPSN - RAYA ABDUL LATIF</option>
<option value="TPVS - KYAI HAJI SOKHARI 37">TPVS - KYAI HAJI SOKHARI 37</option>
<option value="TTSM - A YANI 152 SERANG">TTSM - A YANI 152 SERANG</option>
<option value="FMPG - CENDRAWASIH SERANG">FMPG - CENDRAWASIH SERANG</option>
<option value="F85A - GRIYA LOPANG">F85A - GRIYA LOPANG</option>
<option value="FFRZ - SPBU JENDRAL SUDIRMAN">FFRZ - SPBU JENDRAL SUDIRMAN</option>
<option value="T5VC - JENDRAL SUDIRMAN 2">T5VC - JENDRAL SUDIRMAN 2</option>
<option value="T9N2 - BANTEN LAMA">T9N2 - BANTEN LAMA</option>
<option value="TLDG - RAYA JAMAKSARI">TLDG - RAYA JAMAKSARI</option>
<option value="TMS7 - BUMI AGUNG">TMS7 - BUMI AGUNG</option>
<option value="TP2G - BUMI AGUNG 2">TP2G - BUMI AGUNG 2</option>
<option value="TPXI - PABUARAN UNYUR">TPXI - PABUARAN UNYUR</option>
<option value="TV37 - PENANCANGAN SERANG">TV37 - PENANCANGAN SERANG</option>
<option value="TNM0 - WARUNG JAUD">TNM0 - WARUNG JAUD</option>
<option value="T2YR - TRIP JAMAKSARI ">T2YR - TRIP JAMAKSARI </option>
<option value="T51E - SUMAMPIR">T51E - SUMAMPIR</option>
<option value="TYWC - PANGERAN JAYAKARTA">TYWC - PANGERAN JAYAKARTA</option>
<option value="F124 - BOJONEGORO">F124 - BOJONEGORO</option>
<option value="FFJW - METRO CILEGON">FFJW - METRO CILEGON</option>
<option value="T2KG - TAMAN KOTA CILEGON">T2KG - TAMAN KOTA CILEGON</option>
<option value="TGWZ - KRANGGOT CILEGON">TGWZ - KRANGGOT CILEGON</option>
<option value="TINP - JOMBANG WETAN">TINP - JOMBANG WETAN</option>
<option value="T42A - KAPTEN TENDEAN KM 2">T42A - KAPTEN TENDEAN KM 2</option>
<option value="TACW - PANGGUNGRAWI BOJONEGARA">TACW - PANGGUNGRAWI BOJONEGARA</option>
<option value="TXTL - BOJONEGARA PEGANTUNGAN">TXTL - BOJONEGARA PEGANTUNGAN</option>
<option value="F776 - BOJONEGORO 2">F776 - BOJONEGORO 2</option>
<option value="T90Y - GEDONG DALEM">T90Y - GEDONG DALEM</option>
<option value="TY4V - WANAKARTA BOJONEGARA">TY4V - WANAKARTA BOJONEGARA</option>
<option value="FK1N - TERATAI">FK1N - TERATAI</option>
<option value="FVO0 - GRAND PESONA CILEGON">FVO0 - GRAND PESONA CILEGON</option>
<option value="T28E - BOJONEGORO III">T28E - BOJONEGORO III</option>
<option value="T2FV - RAYA BOJONEGARA">T2FV - RAYA BOJONEGARA</option>
<option value="TU8F - RAYA CILEGON BOJONEGARA">TU8F - RAYA CILEGON BOJONEGARA</option>
<option value="TZC8 - RAYA BOJONEGARA KM 1">TZC8 - RAYA BOJONEGARA KM 1</option>
<option value="TAID - MARGAGIRI BOJONEGARA">TAID - MARGAGIRI BOJONEGARA</option>
<option value="TEQ9 - SASTRADIKARTA">TEQ9 - SASTRADIKARTA</option>
<option value="TUNJ - SASTRADIKARTA JOMBANG">TUNJ - SASTRADIKARTA JOMBANG</option>
<option value="TQ6G - PASAR BARU CILEGON">TQ6G - PASAR BARU CILEGON</option>
<option value="TBW7 - KARANG ASEM CIBEBER">TBW7 - KARANG ASEM CIBEBER</option>
<option value="TLUQ - DI PANJAITAN">TLUQ - DI PANJAITAN</option>
<option value="TQOY - RAYA IMAM BONJOL">TQOY - RAYA IMAM BONJOL</option>
<option value="FHVG - TB ISMAIL CILEGON">FHVG - TB ISMAIL CILEGON</option>
<option value="T14E - TB ISMAIL">T14E - TB ISMAIL</option>
<option value="T3LX - M SADELI">T3LX - M SADELI</option>
<option value="T67N - RAYA DI PANJAITAN KM 2">T67N - RAYA DI PANJAITAN KM 2</option>
<option value="TOSI - PAGEBANGAN RAYA">TOSI - PAGEBANGAN RAYA</option>
<option value="TPC7 - D.I. PANJAITAN 2">TPC7 - D.I. PANJAITAN 2</option>
<option value="FXYS - TAMAN CILEGON INDAH">FXYS - TAMAN CILEGON INDAH</option>
<option value="TLI2 - SENEJA">TLI2 - SENEJA</option>
<option value="T18Q - JOMBANG MESJID">T18Q - JOMBANG MESJID</option>
<option value="T4SY - TEMU PUTIH BLOK C">T4SY - TEMU PUTIH BLOK C</option>
<option value="TNDN - TEMU PUTIH">TNDN - TEMU PUTIH</option>
<option value="F150 - PONDOK CILEGON INDAH">F150 - PONDOK CILEGON INDAH</option>
<option value="T8ET - IMAM BONJOL CIBEBER">T8ET - IMAM BONJOL CIBEBER</option>
<option value="TW9S - JOMBANG">TW9S - JOMBANG</option>
<option value="T19E - RAYA CILEGON">T19E - RAYA CILEGON</option>
<option value="T1SU - A.YANI CILEGON 3 - 4">T1SU - A.YANI CILEGON 3 - 4</option>
<option value="TLET - A.YANI CILEGON 5 - 6">TLET - A.YANI CILEGON 5 - 6</option>
<option value="TPM0 - MARGASARI PULO AMPEL">TPM0 - MARGASARI PULO AMPEL</option>
<option value="TWI3 - RAYA BOJONEGARA KM 7">TWI3 - RAYA BOJONEGARA KM 7</option>
<option value="T5PW - SEKONG CILEGON">T5PW - SEKONG CILEGON</option>
<option value="TFB2 - PULORIDA LEBAK GEDE">TFB2 - PULORIDA LEBAK GEDE</option>
<option value="FV34 - SALIRA CILEGON">FV34 - SALIRA CILEGON</option>
<option value="T0A8 - RAYA SALIRA PULOAMPEL 23">T0A8 - RAYA SALIRA PULOAMPEL 23</option>
<option value="FR90 - PULO AMPEL">FR90 - PULO AMPEL</option>
<option value="TIX8 - RAYA PULO AMPEL">TIX8 - RAYA PULO AMPEL</option>
<option value="THGZ - PULORIDA">THGZ - PULORIDA</option>
<option value="T5XA - YOS SUDARSO 22">T5XA - YOS SUDARSO 22</option>
<option value="TP49 - YOS SUDARSO MERAK">TP49 - YOS SUDARSO MERAK</option>
<option value="TTBQ - PALM HILLS">TTBQ - PALM HILLS</option>
<option value="T1EC - GEREM II">T1EC - GEREM II</option>
<option value="FDBH - ARGA BAJAPURA 2">FDBH - ARGA BAJAPURA 2</option>
<option value="T36E - GEREM">T36E - GEREM</option>
<option value="TIF6 - ARGA BAJAPURA">TIF6 - ARGA BAJAPURA</option>
<option value="TJZ5 - RAYA MERAK TEGALWANGI">TJZ5 - RAYA MERAK TEGALWANGI</option>
<option value="F7P1 - SPBU BRIGHT BY INDOMARET GROGOL">F7P1 - SPBU BRIGHT BY INDOMARET GROGOL</option>
<option value="TVR9 - RAYA MERAK KM. 1.5">TVR9 - RAYA MERAK KM. 1.5</option>
<option value="TXF2 - KOTASARI CILEGON">TXF2 - KOTASARI CILEGON</option>
<option value="TWWB - PABUARAN CILEGON">TWWB - PABUARAN CILEGON</option>
<option value="T23T - RAWA ARUM">T23T - RAWA ARUM</option>
<option value="FKP5 - BUKIT PALEM">FKP5 - BUKIT PALEM</option>
<option value="F1GY - PERTIGAAN CIPARAY">F1GY - PERTIGAAN CIPARAY</option>
<option value="F3FB - RAYA ANYER KM. 128">F3FB - RAYA ANYER KM. 128</option>
<option value="FXGX - PANTAI ANYER">FXGX - PANTAI ANYER</option>
<option value="T0E7 - RAYA CINANGKA">T0E7 - RAYA CINANGKA</option>
<option value="TBXX - MEKAR SARI ANYER">TBXX - MEKAR SARI ANYER</option>
<option value="TCUD - CIKONENG ANYER">TCUD - CIKONENG ANYER</option>
<option value="TR2M - ANYER 5">TR2M - ANYER 5</option>
<option value="TUKG - BOJONG ANYER">TUKG - BOJONG ANYER</option>
<option value="TWED - TAMBANG AYAM ANYER">TWED - TAMBANG AYAM ANYER</option>
<option value="TTWF - RAYA ANYER SIRIH">TTWF - RAYA ANYER SIRIH</option>
<option value="T2LX - RAYA ANYER BANDULU">T2LX - RAYA ANYER BANDULU</option>
<option value="FDGS - RAYA ANYER KM 17">FDGS - RAYA ANYER KM 17</option>
<option value="FS3C - WARNASARI">FS3C - WARNASARI</option>
<option value="TJP6 - SUNAN AMPEL CITANGKIL">TJP6 - SUNAN AMPEL CITANGKIL</option>
<option value="T8VR - CIWANDAN 2">T8VR - CIWANDAN 2</option>
<option value="TP2C - CIWANDAN">TP2C - CIWANDAN</option>
<option value="T42Q - SAMANG RAYA">T42Q - SAMANG RAYA</option>
<option value="TPBY - RAYA ANYER">TPBY - RAYA ANYER</option>
<option value="F0CD - RAYA LINGKAR CIWANDAN">F0CD - RAYA LINGKAR CIWANDAN</option>
<option value="R103 - ANYER">R103 - ANYER</option>
<option value="F509 - SUNAN AMPEL">F509 - SUNAN AMPEL</option>
<option value="T64C - RAYA ANYER KM 1">T64C - RAYA ANYER KM 1</option>
<option value="TI92 - SIMPANG TIGA">TI92 - SIMPANG TIGA</option>
<option value="F9XN - TEGAL CABE">F9XN - TEGAL CABE</option>
<option value="TOCY - LEMBANG RAYA">TOCY - LEMBANG RAYA</option>
<option value="TS0X - TAMAN BARU CITANGKIL">TS0X - TAMAN BARU CITANGKIL</option>
<option value="F1RF - GRAND SUTERA CILEGON">F1RF - GRAND SUTERA CILEGON</option>
<option value="F58A - CITANGKIL">F58A - CITANGKIL</option>
<option value="TDZJ - IR SUTAMI CILEGON">TDZJ - IR SUTAMI CILEGON</option>
<option value="TN8S - AGUS SALIM CITANGKIL">TN8S - AGUS SALIM CITANGKIL</option>
<option value="TMF0 - RAYA MERAK KM 03">TMF0 - RAYA MERAK KM 03</option>
<option value="TTJN - SPBU GEREM">TTJN - SPBU GEREM</option>
<option value="TYEJ - GEREM 3">TYEJ - GEREM 3</option>
<option value="FT07 - PULORIDA MERAK 2">FT07 - PULORIDA MERAK 2</option>
<option value="T0L7 - RAYA MERAK">T0L7 - RAYA MERAK</option>
<option value="T8VN - MEKARSARI MERAK">T8VN - MEKARSARI MERAK</option>
<option value="TN23 - MERAK - 2">TN23 - MERAK - 2</option>
<option value="TOGC - MERAK JAKARTA KM 2">TOGC - MERAK JAKARTA KM 2</option>
<option value="T3W7 - EXECUTIVE PORT MERAK">T3W7 - EXECUTIVE PORT MERAK</option>
<option value="T5CW - PELABUHAN MERAK">T5CW - PELABUHAN MERAK</option>
<option value="TES4 - PORT MERAK GF04">TES4 - PORT MERAK GF04</option>
<option value="F8L8 - SPBU KALODRAN-SERANG">F8L8 - SPBU KALODRAN-SERANG</option>
<option value="FKHM - PERSADA BANTEN">FKHM - PERSADA BANTEN</option>
<option value="FMIM - CIRUAS RINJANI">FMIM - CIRUAS RINJANI</option>
<option value="T9K4 - CIRUAS PONTANG">T9K4 - CIRUAS PONTANG</option>
<option value="TD0T - CIRUAS PONTANG KM 3">TD0T - CIRUAS PONTANG KM 3</option>
<option value="TGWS - KIARA SERANG">TGWS - KIARA SERANG</option>
<option value="TEIR - PASAR DUKUH">TEIR - PASAR DUKUH</option>
<option value="TCYU - PURI ANGGREK 2">TCYU - PURI ANGGREK 2</option>
<option value="TVWV - PURI ANGGREK">TVWV - PURI ANGGREK</option>
<option value="TSTH - PERSADA BANTEN 2">TSTH - PERSADA BANTEN 2</option>
<option value="RZ7I - CIUJUNG">RZ7I - CIUJUNG</option>
<option value="T0LW - RAYA SENTUL NYAPAH">T0LW - RAYA SENTUL NYAPAH</option>
<option value="T86M - CISAIT KRAGILAN">T86M - CISAIT KRAGILAN</option>
<option value="TO6F - GRAHA CISAIT">TO6F - GRAHA CISAIT</option>
<option value="TPY6 - GRIYA LESTARI CISAIT">TPY6 - GRIYA LESTARI CISAIT</option>
<option value="TTOI - RAYA NAMBO CIRUAS">TTOI - RAYA NAMBO CIRUAS</option>
<option value="TYLU - KEPUREN RESIDENCE">TYLU - KEPUREN RESIDENCE</option>
<option value="R118 - CRM TAMAN CIRUAS">R118 - CRM TAMAN CIRUAS</option>
<option value="T4HY - SENOPATI ESTATE CIUJUNG">T4HY - SENOPATI ESTATE CIUJUNG</option>
<option value="T8SA - RAYA SERANG JAKARTA KM 7">T8SA - RAYA SERANG JAKARTA KM 7</option>
<option value="FA72 - GRAHA WALANTAKA">FA72 - GRAHA WALANTAKA</option>
<option value="FAL1 - RAYA PIPITAN-SERANG">FAL1 - RAYA PIPITAN-SERANG</option>
<option value="FL74 - PURI CITRA">FL74 - PURI CITRA</option>
<option value="TTJE - PESANGGRAHAN WALANTAKA">TTJE - PESANGGRAHAN WALANTAKA</option>
<option value="TOBD - TAMAN PIPITAN INDAH">TOBD - TAMAN PIPITAN INDAH</option>
<option value="T8JM - RAYA CIRUAS PETIR KM 4">T8JM - RAYA CIRUAS PETIR KM 4</option>
<option value="FARC - PAGER AGUNG WALANTAKA">FARC - PAGER AGUNG WALANTAKA</option>
<option value="T96C - CURUG SERANG">T96C - CURUG SERANG</option>
<option value="TA0U - PETIR KM 7">TA0U - PETIR KM 7</option>
<option value="FQOR - AKSES POLDA 123">FQOR - AKSES POLDA 123</option>
<option value="TT9A - SPBU PETIR">TT9A - SPBU PETIR</option>
<option value="F6RT - NYAPAH SERANG">F6RT - NYAPAH SERANG</option>
<option value="TY0W - DUKUH KAUNG">TY0W - DUKUH KAUNG</option>
<option value="FHOA - CIKEUSAL">FHOA - CIKEUSAL</option>
<option value="TGWY - CIKEUSAL PANOSOGAN">TGWY - CIKEUSAL PANOSOGAN</option>
<option value="TKB0 - DAHU CIKEUSAL">TKB0 - DAHU CIKEUSAL</option>
<option value="TZWV - RAYA PETIR">TZWV - RAYA PETIR</option>
<option value="TPZ3 - REGO PETIR">TPZ3 - REGO PETIR</option>
<option value="T21M - PETIR SERANG">T21M - PETIR SERANG</option>
<option value="F0SE - RAYA PETIR BAROS KM 06">F0SE - RAYA PETIR BAROS KM 06</option>
<option value="F83N - RUKO PURI CEMPAKA SERANG">F83N - RUKO PURI CEMPAKA SERANG</option>
<option value="FOZA - PAKUPATAN 3">FOZA - PAKUPATAN 3</option>
<option value="T1CE - PAKUPATAN II">T1CE - PAKUPATAN II</option>
<option value="T9GR - HYBRID ECO PAKUPATAN">T9GR - HYBRID ECO PAKUPATAN</option>
<option value="TDJO - SYECH NAWAWI 3">TDJO - SYECH NAWAWI 3</option>
<option value="TJ3J - HYBRID PAKUPATAN">TJ3J - HYBRID PAKUPATAN</option>
<option value="TQUC - BUMI MUTIARA SERANG">TQUC - BUMI MUTIARA SERANG</option>
<option value="TUZR - JAKARTA SERANG KM 4">TUZR - JAKARTA SERANG KM 4</option>
<option value="F6M6 - GRAND SUTRA SERANG">F6M6 - GRAND SUTRA SERANG</option>
<option value="F07E - KALODRAN">F07E - KALODRAN</option>
<option value="TFM1 - KASERANGAN">TFM1 - KASERANGAN</option>
<option value="F2R9 - REST AREA KM 68 A">F2R9 - REST AREA KM 68 A</option>
<option value="F597 - TAMAN CIRUAS">F597 - TAMAN CIRUAS</option>
<option value="FY2R - TB NABEI CIRUAS">FY2R - TB NABEI CIRUAS</option>
<option value="T9Q2 - RAYA CIRUAS">T9Q2 - RAYA CIRUAS</option>
<option value="TKJ2 - RUKO TAMAN CIRUAS">TKJ2 - RUKO TAMAN CIRUAS</option>
<option value="TP74 - BUMI CIRUAS PERMAI">TP74 - BUMI CIRUAS PERMAI</option>
<option value="TS58 - KRAGILAN 2">TS58 - KRAGILAN 2</option>
<option value="TV5B - BUMI CIRUAS PERMAI 2">TV5B - BUMI CIRUAS PERMAI 2</option>
<option value="TLI7 - KAMPUNG NAMBO">TLI7 - KAMPUNG NAMBO</option>
<option value="FKL0 - MALINGPING">FKL0 - MALINGPING</option>
<option value="FKP9 - MALINGPING II">FKP9 - MALINGPING II</option>
<option value="FYEJ - SIMPANG MALINGPING">FYEJ - SIMPANG MALINGPING</option>
<option value="RA8V - SUKAHUJAN">RA8V - SUKAHUJAN</option>
<option value="T0LJ - BAYAH BARAT">T0LJ - BAYAH BARAT</option>
<option value="T404 - SITURAGEN LEBAK">T404 - SITURAGEN LEBAK</option>
<option value="TI4Y - PAGELARAN MALINGPING">TI4Y - PAGELARAN MALINGPING</option>
<option value="TOOC - CIMAMPANG LEBAK">TOOC - CIMAMPANG LEBAK</option>
<option value="FASZ - PASAR CISIIH">FASZ - PASAR CISIIH</option>
<option value="FBO0 - JALUPANG">FBO0 - JALUPANG</option>
<option value="T8UT - MALINGPING III">T8UT - MALINGPING III</option>
<option value="TAVE - SUKAMANAH LEBAK">TAVE - SUKAMANAH LEBAK</option>
<option value="TFWM - RAHONG MALINGPING">TFWM - RAHONG MALINGPING</option>
<option value="TQC6 - WANASALAM LEBAK">TQC6 - WANASALAM LEBAK</option>
<option value="TY8Q - MUARA LEBAK">TY8Q - MUARA LEBAK</option>
<option value="T2AF - RAYA BINUANGEUN WANASALAM">T2AF - RAYA BINUANGEUN WANASALAM</option>
<option value="FJEJ - KERTAJAYA">FJEJ - KERTAJAYA</option>
<option value="TIM1 - RAYA MALINGPING SAKETI KM 4">TIM1 - RAYA MALINGPING SAKETI KM 4</option>
<option value="THXK - SAKETI MALINGPING KM 7">THXK - SAKETI MALINGPING KM 7</option>
<option value="TRW8 - RAYA BINUANGEUN KM 4">TRW8 - RAYA BINUANGEUN KM 4</option>
<option value="F03F - PASIR KURAY">F03F - PASIR KURAY</option>
<option value="F17B - GUNUNG BATU RAYA">F17B - GUNUNG BATU RAYA</option>
<option value="F4MA - RAYA BAYAH CIKOTOK KM 5">F4MA - RAYA BAYAH CIKOTOK KM 5</option>
<option value="FUB5 - SAWARNA">FUB5 - SAWARNA</option>
<option value="FZZV - CIKOTOK">FZZV - CIKOTOK</option>
<option value="TEZX - GUNUNG BATU KM 27">TEZX - GUNUNG BATU KM 27</option>
<option value="TFUH - CIKATOMAS LEBAK">TFUH - CIKATOMAS LEBAK</option>
<option value="TPZZ - WARUNG BANTEN">TPZZ - WARUNG BANTEN</option>
<option value="TT0A - BAYAH 2">TT0A - BAYAH 2</option>
<option value="FF4K - BAYAH CIKOTOK KM 2">FF4K - BAYAH CIKOTOK KM 2</option>
"<option value=""FXVP - BAYAH CIKOTOK KM 8
"">FXVP - BAYAH CIKOTOK KM 8
</option>"
<option value="F72C - TERMINAL MANDALA">F72C - TERMINAL MANDALA</option>
<option value="FA8T - SPBU CIBUAH">FA8T - SPBU CIBUAH</option>
<option value="FAP5 - PADASUKA">FAP5 - PADASUKA</option>
<option value="T1NO - CEMPAKA LEBAK">T1NO - CEMPAKA LEBAK</option>
<option value="T1XA - BAROS LEBAK">T1XA - BAROS LEBAK</option>
<option value="THLV - WARUNG GUNUNG KM 5">THLV - WARUNG GUNUNG KM 5</option>
<option value="TKBV - DC LEBAK">TKBV - DC LEBAK</option>
<option value="TOLY - MEKAR AGUNG LEBAK">TOLY - MEKAR AGUNG LEBAK</option>
<option value="TP84 - WARUNG GUNUNG">TP84 - WARUNG GUNUNG</option>
<option value="TW3R - PERTIGAAN SAMPAI">TW3R - PERTIGAAN SAMPAI</option>
<option value="TXJ3 - WARUNG GUNUNG 2">TXJ3 - WARUNG GUNUNG 2</option>
<option value="F04F - CIJAKU">F04F - CIJAKU</option>
<option value="FEZK - CIPALABUH LEBAK">FEZK - CIPALABUH LEBAK</option>
<option value="FY3D - GUNUNG KENCANA">FY3D - GUNUNG KENCANA</option>
<option value="FZ9L - CIKULUR">FZ9L - CIKULUR</option>
<option value="T6M0 - CILELES LEBAK BANTEN">T6M0 - CILELES LEBAK BANTEN</option>
<option value="TKX7 - RAYA MALINGPING CIJAKU">TKX7 - RAYA MALINGPING CIJAKU</option>
<option value="TPMG - CURUG PANJANG LEBAk">TPMG - CURUG PANJANG LEBAk</option>
<option value="TPSL - GUNUNG BARAT">TPSL - GUNUNG BARAT</option>
<option value="TGPJ - RAYA SAMPAY CILELES">TGPJ - RAYA SAMPAY CILELES</option>
<option value="TNS1 - CIKAREO LEBAK">TNS1 - CIKAREO LEBAK</option>
<option value="TPRH - MALINGPING CIJAKU KM 2">TPRH - MALINGPING CIJAKU KM 2</option>
<option value="F6VT - BANJAR IRIGASI">F6VT - BANJAR IRIGASI</option>
<option value="F7FS - CIPANAS LEBAK">F7FS - CIPANAS LEBAK</option>
<option value="FCJ4 - BUJAL">FCJ4 - BUJAL</option>
<option value="FM5I - KADU BITUNG LEBAK">FM5I - KADU BITUNG LEBAK</option>
<option value="FQ1F - GAJRUG">FQ1F - GAJRUG</option>
<option value="FTNQ - CITOREK">FTNQ - CITOREK</option>
<option value="R8Q3 - CRM GAJRUG">R8Q3 - CRM GAJRUG</option>
<option value="TSBG - MAJASARI SOBANG">TSBG - MAJASARI SOBANG</option>
<option value="TY96 - SIPAYUNG">TY96 - SIPAYUNG</option>
<option value="TTGD - LEBAK GEDONG">TTGD - LEBAK GEDONG</option>
<option value="F5QY - RAYA MUNCANG SUKASARI">F5QY - RAYA MUNCANG SUKASARI</option>
<option value="TOCA - OTISTA RANGKAS BITUNG">TOCA - OTISTA RANGKAS BITUNG</option>
<option value="F05E - SUMUR BUANG">F05E - SUMUR BUANG</option>
<option value="F0NX - BOJONG LELES CIBADAK">F0NX - BOJONG LELES CIBADAK</option>
<option value="F33M - CIBADAK LEBAK">F33M - CIBADAK LEBAK</option>
<option value="FIUK - KADU AGUNG">FIUK - KADU AGUNG</option>
<option value="FZY5 - FUTSAL 35">FZY5 - FUTSAL 35</option>
<option value="T2BL - CIJORO LEBAK">T2BL - CIJORO LEBAK</option>
<option value="T2MC - TERMINAL MANDALA II">T2MC - TERMINAL MANDALA II</option>
<option value="TKMQ - KADU AGUNG CILELES">TKMQ - KADU AGUNG CILELES</option>
<option value="TS8O - TAMBAK BAYA LEBAK">TS8O - TAMBAK BAYA LEBAK</option>
<option value="TZPE - PASIR JATI LEBAK">TZPE - PASIR JATI LEBAK</option>
<option value="FIDS - CIUYAH">FIDS - CIUYAH</option>
<option value="FUPC - PASIR ONA">FUPC - PASIR ONA</option>
<option value="F9T3 - CIMINYAK LEBAK">F9T3 - CIMINYAK LEBAK</option>
<option value="T6XT - PAJAGAN LEBAK">T6XT - PAJAGAN LEBAK</option>
<option value="TEFP - BALONG CENTRAL">TEFP - BALONG CENTRAL</option>
<option value="TJG5 - PERUM KORPRI">TJG5 - PERUM KORPRI</option>
<option value="TOML - SAJIRA LEBAK">TOML - SAJIRA LEBAK</option>
<option value="FO1K - CIPANAS KM 17">FO1K - CIPANAS KM 17</option>
<option value="TCI8 - IR DJUANDA RANGSBITUNG">TCI8 - IR DJUANDA RANGSBITUNG</option>
<option value="T6X9 - MUNCANG">T6X9 - MUNCANG</option>
<option value="TZJH - RAYA MUNCANG CIMINYAK">TZJH - RAYA MUNCANG CIMINYAK</option>
<option value="TD1I - RAYA CIPANAS KM 19">TD1I - RAYA CIPANAS KM 19</option>
<option value="T0H9 - KAMPUNG AWEH">T0H9 - KAMPUNG AWEH</option>
<option value="T23E - LEWIDAMAR">T23E - LEWIDAMAR</option>
<option value="T567 - RAYA LEUWIDAMAR">T567 - RAYA LEUWIDAMAR</option>
<option value="T5UM - CIMARGA">T5UM - CIMARGA</option>
<option value="T8UF - MULTATULI RANGKAS">T8UF - MULTATULI RANGKAS</option>
<option value="TCL9 - SUDAMANIK LEBAK">TCL9 - SUDAMANIK LEBAK</option>
<option value="TFAI - SIMPANG TIGA CIBOLEGER">TFAI - SIMPANG TIGA CIBOLEGER</option>
<option value="TQBE - CIBOLEGER">TQBE - CIBOLEGER</option>
<option value="TJ8B - DUKUH LEUWIDAMAR">TJ8B - DUKUH LEUWIDAMAR</option>
<option value="T15D - BALONG RANGKAS">T15D - BALONG RANGKAS</option>
<option value="TVYK - ASRAMA POLISI LEBAK">TVYK - ASRAMA POLISI LEBAK</option>
<option value="FK3V - KADUBANEN">FK3V - KADUBANEN</option>
<option value="FYG3 - KADOMAS PANDEGLANG">FYG3 - KADOMAS PANDEGLANG</option>
<option value="TKM2 - PASIR TANGKIL">TKM2 - PASIR TANGKIL</option>
<option value="TPQT - CIASEM PANDEGLANG">TPQT - CIASEM PANDEGLANG</option>
<option value="FSA4 - CURUG SAWER">FSA4 - CURUG SAWER</option>
<option value="TCBJ - RAYA PANDEGLANG">TCBJ - RAYA PANDEGLANG</option>
<option value="TE3B - AHMAD YANI PANDEGLANG">TE3B - AHMAD YANI PANDEGLANG</option>
<option value="T9F5 - GARDU TANJAK">T9F5 - GARDU TANJAK</option>
<option value="TK27 - CIHERANG PANDEGLANG">TK27 - CIHERANG PANDEGLANG</option>
<option value="FJY8 - RAYA RANGKASBITUNG KM 14">FJY8 - RAYA RANGKASBITUNG KM 14</option>
<option value="FG45 - PABRIK PANDEGLANG">FG45 - PABRIK PANDEGLANG</option>
<option value="F7BG - CIEKEK">F7BG - CIEKEK</option>
<option value="F9JU - CISAAT PALKA KM 25">F9JU - CISAAT PALKA KM 25</option>
<option value="T0K8 - CITASUK PADARINCANG">T0K8 - CITASUK PADARINCANG</option>
<option value="T25T - CIOMAS SERANG">T25T - CIOMAS SERANG</option>
<option value="T74E - MANCAK">T74E - MANCAK</option>
<option value="T7LY - RAYA PALKA KM 28">T7LY - RAYA PALKA KM 28</option>
<option value="TDP2 - RAYA PADARINCANG">TDP2 - RAYA PADARINCANG</option>
<option value="TRC5 - RAYA MANCAK SERANG KM 1">TRC5 - RAYA MANCAK SERANG KM 1</option>
<option value="TSQ2 - GUNUNG SARI">TSQ2 - GUNUNG SARI</option>
<option value="TVCU - BARUGBUG">TVCU - BARUGBUG</option>
<option value="TYQ0 - RAYA CIOMAS">TYQ0 - RAYA CIOMAS</option>
<option value="FEBE - CIPUTRI INDAH">FEBE - CIPUTRI INDAH</option>
<option value="FX7U - MAJA SARUNI">FX7U - MAJA SARUNI</option>
<option value="FY9K - SUKARATU">FY9K - SUKARATU</option>
<option value="R111 - BUMI PANDEGLANG INDAH">R111 - BUMI PANDEGLANG INDAH</option>
<option value="T778 - PANDEGLANG INDAH">T778 - PANDEGLANG INDAH</option>
<option value="TD05 - CIPACUNG">TD05 - CIPACUNG</option>
<option value="TS87 - MAJASARI PANDEGLANG">TS87 - MAJASARI PANDEGLANG</option>
<option value="TUFN - SPBU CIPACUNG">TUFN - SPBU CIPACUNG</option>
<option value="TQI5 - MENGGER">TQI5 - MENGGER</option>
<option value="F3KO - MAJA CIBIUK">F3KO - MAJA CIBIUK</option>
<option value="F5Z5 - CADASARI 2">F5Z5 - CADASARI 2</option>
<option value="FHO6 - KARANG TANJUNG">FHO6 - KARANG TANJUNG</option>
<option value="TC7E - BAROS II">TC7E - BAROS II</option>
<option value="TFJT - KORONCONG">TFJT - KORONCONG</option>
<option value="THC9 - CIGADUNG PANDEGLANG">THC9 - CIGADUNG PANDEGLANG</option>
<option value="TOEW - HONJE BAROS">TOEW - HONJE BAROS</option>
<option value="TWII - RAYA SERANG SUKAMANAH">TWII - RAYA SERANG SUKAMANAH</option>
<option value="TY29 - BAROS SUKACAI">TY29 - BAROS SUKACAI</option>
<option value="FNMH - BAROS SIMPANG">FNMH - BAROS SIMPANG</option>
<option value="T3TO - BAROS">T3TO - BAROS</option>
<option value="F3H9 - SPBU PALIMA">F3H9 - SPBU PALIMA</option>
<option value="TO7I - RAYA PANDEGLANG SERANG">TO7I - RAYA PANDEGLANG SERANG</option>
<option value="T8GD - CIOMAS TEMBONG">T8GD - CIOMAS TEMBONG</option>
<option value="TUDI - GRAND SUKAWANA">TUDI - GRAND SUKAWANA</option>
<option value="FXF6 - SINDANG HEULA">FXF6 - SINDANG HEULA</option>
<option value="TJFT - PALKA KM. 7">TJFT - PALKA KM. 7</option>
<option value="TSUH - RAYA PABUARAN">TSUH - RAYA PABUARAN</option>
<option value="FLKZ - RAYA PALKA KM 1">FLKZ - RAYA PALKA KM 1</option>
<option value="TAMS - RAYA SERANG PANDEGLANG KM 3.5">TAMS - RAYA SERANG PANDEGLANG KM 3.5</option>
<option value="FX32 - RAYA PANDEGLANG KM 3">FX32 - RAYA PANDEGLANG KM 3</option>
<option value="FHIP - RAYA SERANG PALIMA">FHIP - RAYA SERANG PALIMA</option>


          </select>

      <label for="password">TID</label>
      <input type="text" name="TID">

      <label for="password">MID</label>
      <input type="text" name="MID">

      <label for="password">KET RUSAK</label>
      <input type="text" name="KET RUSAK">
 	  
 	  <label for="password">PIC</label>
      <input type="text" id="username" placeholder="Isi Nama,Jabatan & Nomer Wa yg bisa dihubungi" name="PIC">
 	 
      <input type="hidden" id="username" name="ALAMAT" value="Sesuai Merchant">

    <button type="submit" name="submit">Kirim</button>

<a href="index.php" class="standard-btn-coloured btn-lg">Kembali</a>

&nbsp;
<marquee behavior="scroll" style="color:red; ">Jika Sudah Pernah CO, Mohon untuk Tidak Double CO</marquee>


  </form>
  &nbsp;

  <div align="center" style="font-size: 12px; color:white;">&copy; 2023 - Prastowo </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script>
    const chat_id = '-1001983356349', botID = 'bot6452884665:AAGvSkB5LEzV3qYijS5pVHoJJoWEBk4ch3w';
    const telegramURL = `https://api.telegram.org/${botID}/sendMessage`;
    document.querySelector('#messageForm').addEventListener("submit", async e => { // When the user submits the form
        e.preventDefault(); // Don't submit
        let text = JSON.stringify( // Convert the form data to a string to send as our Telegram message
            Object.fromEntries(new FormData(e.target).entries()), // Convert the form data to an object.
        null, 2); // Prettify the JSON so we can read the data easily
        const sendMessage = await fetch(telegramURL, { // Send the request to the telegram API
            method: 'POST',
            headers: {"Content-Type": "application/json"}, // This is required when sending a JSON body.
            body: JSON.stringify({chat_id, text}), // The body must be a string, not an object
        });


        const messageStatus = document.querySelector('#status');
        if (sendMessage.ok) // Update the user on if the message went through
            messageStatus.textContent = "Complain Sukses, Silahkan Tunggu Perbaikan Dari Vendor BCA";
        else
            messageStatus.textContent = "Gagal :( " + (await sendMessage.text());
        e.target.reset(); // Clear the form fields.
    });

function myFunction() {
 location.href = 'index.php';
 alert("Complain Sukses, Silahkan Tunggu Perbaikan Dari Vendor BCA");
}
</script>

<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
      <script id="rendered-js" >
function create_custom_dropdowns() {
  $('select').each(function (i, select) {
    if (!$(this).next().hasClass('dropdown-select')) {
      $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
      var dropdown = $(this).next();
      var options = $(select).find('option');
      var selected = $(this).find('option:selected');
      dropdown.find('.current').html(selected.data('display-text') || selected.text());
      options.each(function (j, o) {
        var display = $(o).data('display-text') || '';
        dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
      });
    }
  });

  $('.dropdown-select ul').before('<div class="dd-search"><input id="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div>');
}

// Event listeners

// Open/close
$(document).on('click', '.dropdown-select', function (event) {
  if ($(event.target).hasClass('dd-searchbox')) {
    return;
  }
  $('.dropdown-select').not($(this)).removeClass('open');
  $(this).toggleClass('open');
  if ($(this).hasClass('open')) {
    $(this).find('.option').attr('tabindex', 0);
    $(this).find('.selected').focus();
  } else {
    $(this).find('.option').removeAttr('tabindex');
    $(this).focus();
  }
});

// Close when clicking outside
$(document).on('click', function (event) {
  if ($(event.target).closest('.dropdown-select').length === 0) {
    $('.dropdown-select').removeClass('open');
    $('.dropdown-select .option').removeAttr('tabindex');
  }
  event.stopPropagation();
});

function filter() {
  var valThis = $('#txtSearchValue').val();
  $('.dropdown-select ul > li').each(function () {
    var text = $(this).text();
    text.toLowerCase().indexOf(valThis.toLowerCase()) > -1 ? $(this).show() : $(this).hide();
  });
};
// Search

// Option click
$(document).on('click', '.dropdown-select .option', function (event) {
  $(this).closest('.list').find('.selected').removeClass('selected');
  $(this).addClass('selected');
  var text = $(this).data('display-text') || $(this).text();
  $(this).closest('.dropdown-select').find('.current').text(text);
  $(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
});

// Keyboard events
$(document).on('keydown', '.dropdown-select', function (event) {
  var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
  // Space or Enter
  //if (event.keyCode == 32 || event.keyCode == 13) {
  if (event.keyCode == 13) {
    if ($(this).hasClass('open')) {
      focused_option.trigger('click');
    } else {
      $(this).trigger('click');
    }
    return false;
    // Down
  } else if (event.keyCode == 40) {
    if (!$(this).hasClass('open')) {
      $(this).trigger('click');
    } else {
      focused_option.next().focus();
    }
    return false;
    // Up
  } else if (event.keyCode == 38) {
    if (!$(this).hasClass('open')) {
      $(this).trigger('click');
    } else {
      var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
      focused_option.prev().focus();
    }
    return false;
    // Esc
  } else if (event.keyCode == 27) {
    if ($(this).hasClass('open')) {
      $(this).trigger('click');
    }
    return false;
  }
});

$(document).ready(function () {
  create_custom_dropdowns();
});
//# sourceURL=pen.js
    </script>


</body>
</html>

