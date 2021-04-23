<?php
	session_start(); //maintaing email id of the user
?>
<!DOCTYPE html>
<html lang="en">

  <head>
	<title>Choose@TCERide</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TCE ride.com</a>
    </div>
  <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
      </ul>
	</div>
</nav>  
	
  <br><br>
		<br><h1><center>Welcome to TCE Ride</center> </h1><br>

 
  <div class="row">
    <div class="col-md-6">
      <div class="thumbnail" style="padding-left: 100px;  padding-right: 100px;">
        <a href="registration.php" target="_blank">
          <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMQEBAQEBEREBAOEA4ODhAREBAODg4PFhIXGBYSFhYZHiouGRsnHxYWIzMvJystMDAyGCJCO0IwOiovMC0BCwsLDw4PGxERGy8nIh4vLy8vLy8vLy8vLy8vLy8tLy0vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLS8vLy8vL//AABEIAKgBLAMBIgACEQEDEQH/xAAcAAADAQADAQEAAAAAAAAAAAAAAQIDBQYHBAj/xAA/EAACAgECAwUEBwUGBwAAAAABAgADEQQSBQYhEzFBUWEHInGBFCMyQpGhsVJygpLBJENiotLwFiUzRLPR4f/EABsBAQADAQEBAQAAAAAAAAAAAAABAgMEBQYH/8QALBEAAgIBAwMBCAMBAQAAAAAAAAECEQMEEiExQVFhBRMicYGR0fAjseGhFP/aAAwDAQACEQMRAD8A7tGBGBGBPzqGPyeqICViUBACdMYECxKAjAlATZQogkCViWBALNFEiycSgsoLKAl9pFmYWVtl4gBLbQTiPErEe2SogjEeJWI8SdoIxDEvEMSdoIxDEvEMRtBEMS8QxG0GeIYmhENsjaDLERWalYsSHEGe2LbNMQxIcRZjiSRNsRFZVxJsxxERNSskiZuJJliSRNSJJEzlAGZEkiakScTCWMkiTNCJGJzyhySWBKAgBLAnbGBUQEsCAEsCbxiQSBLCxgSwJookWSBKAjAl4l0gQFjCy8RYlqAYjxDEeJIJxDErEYEtQIxHiViGIoE4hiXthiARiGJeIYgEYhiXiG2ARiLE6H7Qecr9Jcum0qoG7JbbbXXeRuZgqoO77hJJz3zpC85cS3bhqrD442UFPw2zohpZSin5IXJ7niPE6zyBzG+voc3Kq3UOK7Cgwlilcq4H3T3gj09cDs+JhODjJxfYknEWJWIYlKBGJOJpiLEjaDMiSRNSskiUcQZESCJuRJZZRxJswIkkTYiQRMpRJMiIsSyIphKBNlgSwIgJoonTGJUFEoCUBGBNlEgQEvEJWJdIBDEeIwJagLEeI8RyQLE4ziXFloAZs+8Qqqq7nOSBnHpnrOVKzqGrTXjiNWzZ9ACfWj6vcW2nP+LdnbjHTE5827cviSSTbt7brsnT5fZdw3XY7Pp793zGQfAibifBpdNdXaqt2T0dm7CwC1bVs3LtRt9jbsgt16d05KbrFkxfBkab8rwLT6E4hiXFLAnEeI4QBYhiOEAnEMSo4B1Hi2lrbXagvWbN/DawawELWGq9ztUN03HtFHXzEnS8vaep0RKX7OxXscWBLqVZdo2ncTtY7j9np7pz3TtVtIJ3YG4AgHHXacZGfkPwnw1hmZkKoMMQpRy5CeLNlRtPhgZ+M7sWRe757Ex4ON5N0KVjV2IFUXattqKoVVSpFrwAPNldv4p2KFVYUYUBR5DpKxOOct0myCMRYlkQIlAZ4iImkWIYM8RS8RESKBBEkiaYiIlXEGJEkiakSCJk0DEiTibESMTNxLFATQCJRLAmsUVGBLAgIwJqlQACUBACVLAWI8RgRyQAEqKOAdA9pvN76QJpdO23UXL2j2dM005IG3/ExBx5AHzE6v7PeJ6jUX/QL7Xt091dztudjdUyjcr1v3qwbB8vGde5713b8S1dmchLmpT0FQFfT5qT85XJvGho9ZVqGXci7q7cDLLW4wzD1HQ+uMT6PDp9mlagviav1v8AzseZPK3ltviz9BImPHJONzEAM7AAbjgDr0HhNJnTarqroQyOAyMDlWUjIIPlPl41qmp019yAFqabLVBztLKMgHE+eSlOdd2z0W0kfdFM6LQ6gjyGR1BBxnBz8ZrKkihCEEhCEIARwnxcX140+nuvbqKa2fH7RA91fmcD5yUm3S7kN0cDzNzemmur06Ya0lWuJ+zUmQQn7zDPw6eYnH8X5huobUFdifX1tU+1Tmrs8lWz39cH4k+k81OqZ7u2tO53sNljeZJ6mc3xzVmxMk94qUepVVBP+Uz6HFo4Y0o0n59TKGW4ZL8KvujunLvtAquIr1QFFhwBYD9Q59SfsfPI9Z3Seccscr063h2WAS4W3Cu4D3h3YVh95f08MTfkTi9tN78M1Pem9acnPZsoyawfFCuWHl8+nnZ9Pje94usOq9PK/H9EQm1W7uegwjinnG4sRYlQgERES8SSIBBEnE0IkkSASRMyJoRJYSkkDNhMsTYycTJoWUJayRLEvEDEoRCWs1QGJQEkS5ICEI4AoLCAkPoEfmPiT7rtQ37V9zH52MZ9vAeC26u000bTb2T2hWbYHC4yoPgevTPSfJr0+v1A/ZvvH4WMJy/JvMVeg1YudTavZ2VMqEBhuKncM9+Nvd0759dLcsbcOtcHjxrck+hyPDuYuI8IxVbVYtIOBTqa2NI69ezsHd/CSPSd14F7T9Pe9VNlF1dtzrUmzbdWXYhVGeh7z+zOY4XzxodSNovVGbp2eoHZE+mW6H5Ez715d0naJeum04tU70tStEbOO/K9/fPEzZscn/PhqXlcf3/p2wxyXEJ2jS/WNXad1ThGK1K//UFj4yG9zO0d4JbHh4YJ5N8AqM9WrD93gc/+p1jQcvjR2OKLGTTOz2LQAD9a+N9j2NlnPQYyc46dwnYaXBCjxQbQfEjP6Ty3lx+9nCL7Rr59108Prz04OlJ0m/U2ijiliwQhCAE6b7VdXs0SVj+/vRT+4gL/AKhZ3OeZ+2G7rpU8Amoc/H3AP6zr0Md2ogvr9jPK6gzqHG9J2P0Re4vo6Lm/esex/wBCB8p8YuLKqk5CZA+E57n9ANXtBH1en0tSqM5VRUD1/Gdfr7p7+BuWKLfdX9zjkqZ6r7NdWq8PtZ2CJRfdvZjhVXYjEn+acbyxQ2v4ndxAApRU52Z6M7CvYi/Hbhj5ZA8ZXIOkqv0OposO5LLt7gZBQmtMfMFM/ITvHCtDXp6UppXbXWML5k+LE+JJ6meRqJLDLI11m2vlF9fqzpjFyUfB9kUITzDcIQhACKOEAgiIiWZMAzkmWZJlWDMyZbSZlIDEsSBLEtEFCWJAlrNAUsqSJUkDksekqda45x66u/6NpqVts2BiXJCqSxGT6DGe+WjHd488ukTGLlddlf0RzX0wef5GQ+r8mGfVTOs0cE1HvX6niFy5wzivs66U8OhZTgfACclTw9HUlNXY4BKl1tVveHeMhceMvLUadK0m15S4+7qyI33R5rzL7Or21Ft1FlTpbbZdss31uhdixUEKQRknynW9TyZrk/7cuB412VP+W7P5T1viXBdUAW0uufcOorvSl629N2wEfgZ1lOeLKi1Wp0ym2ssjlH7IhgeuVwfyOJ6mk9oe/X8bTceqfDX76Wcs8WNP4rV/Y8yvpspO22uysnpixGrJ+G4TtHIPGbqNbpUrscVXX102VbianSwhT7vdkZyD6Tm+c+PnUcKBWpqU1OsSgBn39olSmxmHQdA2wfIzhPZxpt/E9IMZCOz/AMlbuD+Kid7nvwzc10v16I5nFRmtr8HvOrHuk+XWfELcFQem44U+APkfjORdAwKnqGBUjzBGCJwWhsFtCMxDblwzDuZlOCwx4EgkfGfD6uOxrLXHR/8Af957Va5PVhT4ZyWi4gLLLKmG22rqVP36z9l19O8HyIPpPunDnSF7tPcpw1ZsrtPi1TIen8wQ/IzmJ3QkpRTTv9/FX4drsQ64r9/ev1FCEcsQE4bjvBNPqip1FYc1KwU72TYpxnOD6flMOYeZBpbFrFXaFk3n39gUEkDwOe4zrmm5mVW1DPQLPpVvaOGsyNnZJWKzleowp/mm+ByhLeuxdYpSV1wdf9oejYa92A916tOUOQcqKlXP4qZ14achcnGSe7P+/wDZnN8TcFEIG1akdEXO7CG12RB6AMF/hnctJwZNRwZAig2NU2qRsDd22S2M/AbJ7ENZjx44L5J+nqcOXBljJ2vkcb7KLPrNVWfFKbAPgWBP+YT0cTyv2a2412PCzT3L8wyMP0M9Wnn+0lWd+qRpppboChCE4DcIQhACEIQBSZRkwCTIMoxGVYIaRKaKZtgQM0UzFTLBiLBoJQkxiaWDSUDMwZQlgUTPirrXL2EDLYz5nHQZkceFh09vZXJpnCb+3dBalSqQzkqSMjaGHpmdP5aou4jQ1uo1zpXUWFg0wr07ogTf21nkh7gMH5dcTHRZNS1tapdbvr2fC5+TaM55lj7dTmOLU6u1mFdyLVYHUoVQ7AQQCMoc4wM5znLd3Qrnw3Q6ikqbdRW1Shu0UKlakncdwwg29WHj93vOQF4itNZXVZbo7bdVTWAXqvr/ALRSpyVI6neMDPQ5xj3ROoarnawti6kse8EXEqR5gbZbJ7N1ruMtjXlRVv79GRHNj9b/AHwei8R44ACtPvN4v91fh5/p8Z0HR8MGu4qKXZgljk2MD7zLXVlsHzJXHznxajnEFcJUyk+LMvu+o6dTMOX+al02pqvKOwrY71BUsyMpVsZPfg5+U7fZ+gemjNxVNql5ZlmyqbS7dzsPtjVK34fpqlCV0U3OK16KA7Iq/wDjb8Z8/se027XM+OlenubPkSyKPyLT4eeeYtBrtQlwfV1t2CVkmmp602sxA27s594k4JHUTkuUeZdBoK7raH1Oo1FtVNdenso7NnsBOQGQsApJHrgdNxnerjonCvia6erfJl1zX2O+c5cYZAmi07Y1erVssO/TaXusvPkfur5sfQz6NBWlFFSKu1K6q60XyVVAA/Kdf5V4Zaxs1OrO7U6kiy89y1qPsUL5Ko/r398+7i3F0V0rzussJFNS/bcDvcj7qjzPw7zifKalf+jLHBj529a7v9/5yzvj8K3SPvp1Nhb3WIyc4+6B8JzVGoz0Pf8AkZ5KvP1i6wadFp7NrHqexEsvZbOuw7sgMp8QACMN5ZPO8O5tur11Gl1qUivV+5ptVSHrVrcjCOjs23JIHf3sPXHQ/Z+txtOKVLtuV18ivvsbPRoSZU0LHn3PQzrK06A2U1Bc9Bk2OO+dc1A7NmRiuUJBwcid45w5Zs1lldlTVrsrNbCwsM+8SMYB8zOv/wDAGq/bo/ns/wBE6ISjtXPJ1Y8qUVyde49Sak2Pjcyo4wdw2k//ACelez454bpvhaPkLXnQeZOWbdKido1bdruxsLEDaVznIHn+U9F5L0/Z8P0qZB+q35HQe+xfHy3Yl88f4lJdG+DDJlUnV20dD5er7DjC1DoEv1VI/d2WAfoJ6xPMNWuzjy+uoqP89Q/1GenzTXvc4S8xRx6ZUpLw2KEITgOkIQhACKERMACZJgTJMgCiMZkkyrYIMWYGTmZNghTNAZiDNVMrGQaNAZpMQZQM1TBpKBkZjBlwaTzf2kMaOIcNuQtQmoNtFt1PuWdp7vZ5cdx6j5A+U9FBnGcx8Cp4hp3094OxsMrLjfVYO519ep+IJHjOjT5fdZFJ9DPJHdGjzr/j/V8Psu0t9Vf23Y9pWNPbbW32bw6FMkgdT1PT0nCcx2vrKb+JtQlVL2CtXCNXU1pIUtVnO495J7s7vIzuZ0XGqEWhquH8Xpp6UWapB21YH2c7yOox5sfWb6blXWa6+q/jNtJq0xDafh+nGNMjDuL+ePLLZ7s4yJ7MtXhUb3I4/cyb6Hm/BqKqtRpjfp9b9Wub1On7QNduOHCdD2YBB7icjxnrlHL1TqrrUm1wGG7TitsHzVgCPmJ2oN8YAzw9VN6hp2414a/B2wjsOg8T9mumvse11cO6BPq/q1UjGGVQcZ6fDqZhwf2V6fT3V3dpqnetg6brErTI89ig/nPRZUyvNW33sq+n4LbY9aR8lejUDBAI8u5Z5pruFNbx/iVAcVW6jhu7h5I6MRUg2L1GDuVj/AZ6rOtc5cq/ThVbTa2m1ulbdpdQucqc5KNjvU4+XqCQejQuGnnwqRTNFzR4xy7dVpbnsvQnstO9KVllqfS6kdD2itg/tDpk+8ek7BxHQsvDOFB1K6zXcXOo0wbcLvoxZiGK+A3OjfxCdkvbjBdTdwjhes1CbRXr2FGcjuc7mB6d/QL6Ccry7yredUeJcUuXUawKVpSsf2fSJ16J0GTgnw6ZPeTmerkz4YXNO3Jeb6dOOy8nLGEnx2O6GKfO1/lINp854lHbZ9knM+PcfM/jFJoWcF7Rad2lVh/d2jP7rKw/XbPv5MvDaHT9fsq6fy2MP6TiebON6ZabqHsDWlcbEG8o4wVDEd3UD1mHs51y2UW1A5NNufgrjIH4hvxna6ek294yv6Mx2SWXdXDR8HG1/wCe0Hzt0jfgoH9J6MGHmPxnmHNGuXT8WqusVttYpYdMdoAh+yT34J/Kdw4Px+jVZFT++BuatsLYB548R8Myup+KGNrtFE4oSTk2urOwZhPijyfOclGtn2RZny9ofOWL/OQDaImTuizIJGYiYZkkyrYGTMyYExEzNsCYzOMmRmZtkkgzQGYAywZlGRJuGlgzAGWDNoyKmoMsGYhpQM1TBrmGZmDLzLIFZjBk5hmSCwYZkZjzJBcMyMx5kgrMeZG6PMiwVmPdIzDMWBNWD6fCQafWaZhmLIox7IxdmfKb5hmTYo4GzlbSs7O2lqZnZnYsm8MxOScHp1M5LT6Ra1CV1rWo7lRAij5AT7N0WZLm31YPku0wdSroHU96ugdT8jPn0nBqKW306amp8Ebq6a62we8ZAnJEwzCk+wox2Hyh2Zm2YsyrYM+y9YxWPjKzDMiyQzFAmQTK2CiZJMRMktKOQAmQTETJJmbZNATJzAmTMXIkQMYMgGMGc0ZkmgMsGZAxgzpjMg2BlBpiDKBmkZEGwMoGYgyw00TIo0BlBpkGhmXUgbZjmQMMydwNMyszPdHmWsF5hmTmGYsFQk5hJsFQkwiwVDMmGYsFZhmTmLMiwPMcjdETIsF5izIzFmQ5A03SCZJMRaVcgXmSWkkyMyjkCi0kmSTJJlJSLFEyCYZk5mM5gZMmImLM55TRIowYoTmi+SSgZQMcJ1QYDMrMITeLKlAxgwhLpgeY8xwmiZA90e6EJdMgYMeYQiwPMWYQlrA8whCLAQhCLAZizCEWB5izCEiwGZO6EJFgC0RaEJFkokmLMcJRskgmImEJVsEkxExwmMmwRmImEJhNlhGTCE5rsH//2Q==" alt="Lights" style="width:500px; height:300px;"">
          <div class="caption">
            <p><center><button type="button" class="btn btn-success btn-block btn-lg">Offer a ride</button></center></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="thumbnail " style="padding-left: 100px;  padding-right: 100px;">
        <a href="reservation.php" target="_blank">
          <img src="https://i.ebayimg.com/00/s/MzAwWDMwMA==/z/kGcAAOSwmnFdzKi-/$_2.JPG" alt="Nature" style="width:500px; height:300px;" >
          <div class="caption">
            <p><center><button type="button" class="btn btn-success btn-block btn-lg">Find a ride</button></center></p>
          </div>
        </a>
      </div>
    </div>
	
	</div>
	
  </body>
  <footer class="page-footer blue">

  <div class="footer-copyright text-center ">© 2019 Copyright:
    <a href="https://www.tce.edu/"> Thiagarajar College of Engineering, Madurai</a>
  </div>

</footer>
 </html>