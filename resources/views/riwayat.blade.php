@extends('layouts.main')

@section('title')
    Riwayat
@endsection

@section('contents')
    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="mb-3">Ruangan 1</h5>
                    <table id="datatable1" class="table table-sm table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Arus (A)</th>
                                <th>Tegangan (V)</th>
                                <th>Daya (W)</th>
                                <th>Penggunaan (kWh)</th>
                                <th>Delay (ms)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2024-10-01</td>
                                <td>15</td>
                                <td>220</td>
                                <td>3300</td>
                                <td>5.5</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>2024-10-02</td>
                                <td>13</td>
                                <td>225</td>
                                <td>2925</td>
                                <td>5.0</td>
                                <td>120</td>
                            </tr>
                            <tr>
                                <td>2024-10-03</td>
                                <td>16</td>
                                <td>230</td>
                                <td>3680</td>
                                <td>6.2</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>2024-10-04</td>
                                <td>14</td>
                                <td>220</td>
                                <td>3080</td>
                                <td>5.8</td>
                                <td>110</td>
                            </tr>
                            <tr>
                                <td>2024-10-05</td>
                                <td>17</td>
                                <td>210</td>
                                <td>3570</td>
                                <td>6.0</td>
                                <td>95</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="mb-3">Ruangan 2</h5>
                    <table id="datatable2" class="table table-sm table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Arus (A)</th>
                                <th>Tegangan (V)</th>
                                <th>Daya (W)</th>
                                <th>Penggunaan (kWh)</th>
                                <th>Delay (ms)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2024-10-01</td>
                                <td>15</td>
                                <td>220</td>
                                <td>3300</td>
                                <td>5.5</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>2024-10-02</td>
                                <td>13</td>
                                <td>225</td>
                                <td>2925</td>
                                <td>5.0</td>
                                <td>120</td>
                            </tr>
                            <tr>
                                <td>2024-10-03</td>
                                <td>16</td>
                                <td>230</td>
                                <td>3680</td>
                                <td>6.2</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>2024-10-04</td>
                                <td>14</td>
                                <td>220</td>
                                <td>3080</td>
                                <td>5.8</td>
                                <td>110</td>
                            </tr>
                            <tr>
                                <td>2024-10-05</td>
                                <td>17</td>
                                <td>210</td>
                                <td>3570</td>
                                <td>6.0</td>
                                <td>95</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
