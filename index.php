<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    ปวช.IT1 วอศ.
  </title>
  <!-- css bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- js bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
  </script> 

  <!-- นี้คือ font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">

  <!-- แนบ css -->
  <link rel="stylesheet" href="style.css">

  <!-- ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      $("button").click(function () {
        $.get("index.html?data=x&status=b", function (data, status) {
          alert("Data: " + data + "\nStatus: " + status);
        });
      });
    });
  </script>
</head>

<body style="font-family: 'Prompt', sans-serif;">
  <div class="container py-3">
    <h3 style="font-weight: bold;">
      การบ้านออนไลน์
    </h3>
    <table class="table table-hover">
      <thead class="table-dark">
        <tr>
          <th>
            #
          </th>
          <th>
            วันที่
          </th>
          <th>
            เรื่อง
          </th>
          <th>
            รายละเอียด
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            1
          </td>
          <td>
            25 ธันวาคม 2563
          </td>
          <td>
            Margin & Padding, CSS LINKS และ CSS Lists
            <span class="badge rounded-pill bg-warning text-dark">New</span>
          </td>
          <td>
            <button type="button" class="btn btn-info">
              <a href="page/list/index.html">ตัวอย่างการบ้าน</a>
            </button>
          </td>
        </tr>
      </tbody>
    </table>

    <button>Send an HTTP GET request to a page and get the result back</button>
  </div>

</body>

</html>