<form action="addhome" method="post">
  {{csrf_field()}}
<table>
  <tr>
    <th>Nama</th>
    <th>:</th>
    <th><input type="text" name="name_homestay"/></th>
  </tr>
  <tr>
    <th>Alamat</th>
    <th>:</th>
    <td><input type="text" name="address"/></td>
  <tr>
    <th>Deskripsi</th>
    <th>:</th>
    <td><input type="text" name="desc"/></td>
  </tr>
  <tr>
    <th>Harga</th>
    <th>:</th>
    <td><input type="text" name="cost"/></td>
  </tr>

</table>
<button type="submit">Submit</button>
</form>
