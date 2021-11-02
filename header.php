<html>
  <head>
        <title>our Products</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style media="screen">

    .topnav a {
      color: #b6d9bf;
      float: left;
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }
    .topnav a.active {
      background-color: #ddd;
      color: black;
    }

    /* Style the search box inside the navigation bar */
    .topnav .search{
      float: right;
    }

    .topnav input[type=text] {
      padding: 6px;
      margin-top: 8px;
      font-size: 17px;
      border: none;
    }

    .topnav .search button {
      float: right;
      padding: 6px 10px;
      margin-top: 8px;
      margin-right: 16px;
      background: #ddd;
      font-size: 17px;
      border: none;
      cursor: pointer;
    }

    .topnav .search button:hover {
      background: #ccc;
    }
    /* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
    @media screen and (max-width: 600px) {
      .topnav .search {
        float: none;
      }
      .topnav a, .topnav input[type=text], .topnav .search button {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
      }
      .topnav input[type=text] {
        border: 1px solid #ccc;
      }
      }
    </style>
  </head>
  <body>
    <div class="topnav">
      <a class="active"  href="Ecommerce.php">Home</a>
      <a  href="Product.php">Products</a>
      <a  href="categories.php">Categories</a>
      <a  href="Account.php">Account</a>
      <a href="contact.php">Contact</a>
      <div class="search">
        <form action="/action_page.php">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      </div>
    </body>
    </html>
