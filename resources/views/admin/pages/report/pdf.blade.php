<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Month Report Imperials Tech</title>

<style>
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  width: 21cm;
  height: 29.7cm;
  margin: 0 auto;
  color: #001028;
  background: #FFFFFF;
  font-family: Arial, sans-serif;
  font-size: 12px;
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 200px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url(dimension.png);
}

#project {
  float: left;
  margin-top:-100px
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  text-align: right;
}

#project div,
#company div {
  white-space: nowrap;
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.status {
  font-size: 1.2em;
  text-align: center;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
</style>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="{{ public_path('/assets/user/images/logo4.png') }}">
      </div>
      <h1>REPORT {{date('d-M-Y', strtotime($report->tgl_report))}}</h1>
      <div id="company" class="clearfix">
        <div>CV.Imperial Tekhnik Elektrikal</div>
        <div>Pergudangan Prima Center 1, Jl. Pool PPD ,Jl. Pesing Ponglar, RT 9/RW 2,  <br>
             Kedaung Kali Angke Cengkareng, Jakarta Raya, Indonesia</div>
        <div>(+62) 899-440-7084</div>
        <div><a href="mailto:techimperials@gmail.com">techimperials@gmail.com</a></div>
      </div>
      <div id="project">
        <div><span>PROJECT</span>{{ $report->client->project }}</div>
        <div><span>CLIENT</span>{{ $report->client->nama }}</div>
        <div><span>DATE</span>{{date('d-M-Y', strtotime($report->client->awal_kontrak))}}</div>
        <div><span>DUE DATE</span>{{date('d-M-Y', strtotime($report->client->akhir_kontrak))}}</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">SERVICE</th>
            <th class="desc">DESCRIPTION</th>
            <th>STATUS</th>
          </tr>
        </thead>
        <tbody>
          @if (!empty($report->website_desc))
            <tr>
              <td class="service">Website Development</td>
              <td class="desc">{!! $report->website_desc !!}</td>
              <td class="status">Done</td>
            </tr>
          @endif
          @if (!empty($report->google_desc))
            <tr>
              <td class="service">Google Ads</td>
              <td class="desc">{!! $report->google_desc !!}</td>
              <td class="status">Done</td>
            </tr>
          @endif
          @if (!empty($report->fb_desc))
            <tr>
              <td class="service">Facebook Ads</td>
              <td class="desc">{!! $report->fb_desc !!}</td>
              <td class="status">Done</td>
            </tr>
          @endif
          @if (!empty($report->ig_desc))
            <tr>
              <td class="service">Instagram Ads</td>
              <td class="desc">{!! $report->ig_desc !!}</td>
              <td class="status">Done</td>
            </tr>
          @endif
          @if (!empty($report->sosmed_desc))
            <tr>
              <td class="service">Sosial Media Manage</td>
              <td class="desc">{!! $report->sosmed_desc !!}</td>
              <td class="status">Done</td>
            </tr>
          @endif
          @if (!empty($report->yt_desc))
            <tr>
              <td class="service">Youtube</td>
              <td class="desc">{!! $report->yt_desc !!}</td>
              <td class="status">Done</td>
            </tr>
          @endif
      </table>
      <div id="notices">
        <div>Hormat Kami:</div>
        <div class="notice">CV.Imperial Tehknik Elektrikal</div>
      </div>
    </main>
    <footer>
      Copyright &copy; CV. Imperial Tehknik Elektrikal.
    </footer>
  </body>
</html>
