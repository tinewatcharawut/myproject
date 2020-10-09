<style>
@font-face{
 font-family:  'THSarabunNew';
 font-style: normal;
 font-weight: normal;
 src: url("{{ asset('fonts/THSarabunNew.ttf') }}") format('truetype');
}
@font-face{
 font-family:  'THSarabunNew';
 font-style: normal;
 font-weight: bold;
 src: url("{{ asset('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
}
@font-face{
 font-family:  'THSarabunNew';
 font-style: italic;
 font-weight: normal;
 src: url("{{ asset('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
}
@font-face{
 font-family:  'THSarabunNew';
 font-style: italic;
 font-weight: bold;
 src: url("{{ asset('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
}
body{
 font-family: "THSarabunNew";
 font-size: 16px;
}
@page {
      size: A4;
      padding: 15px;
    }
    @media print {
      html, body {
        width: 210mm;
        height: 297mm;
        /*font-size : 16px;*/
      }
    }
</style>
<table class="table">
  <thead>
    <tr>
      <th>#</th><th>Title</th><th>Content</th><th>Price</th><th>Cost</th><th>Photo</th><th>Quantity</th>
    </tr>
  </thead>
  <tbody>
    @foreach($product as $item)
    <tr>
      <td>{{ $loop->iteration }}</td><td>{{ $item->title }}</td><td>{{ $item->content }}</td><td>{{ $item->price }}</td><td>{{ $item->cost }}</td><td><img src="{{ url('storage/'.$item->photo )}}" width="100" /></td><td>{{ $item->quantity }}</td>
    </tr>
    @endforeach
  </tbody>
</table>