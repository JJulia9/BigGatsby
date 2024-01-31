<?php 
    session_start(); 
    include '../../../auth/dbConfig.php';
    include '../../../../partials/Header.php';

    if (!isset($_SESSION['loggedin'])) {
        header('Location: login');
        exit;
    }

$blogs = $conn->prepare('SELECT 
        b.id,
        b.title,
        b.blog_content,
        b.created_on,
        b.img_path,
        b.show_name,
        b.published
       FROM blog b

      
');

$blogs->execute();
$blogs->store_result();
$blogs->bind_result($blogId, $title, $blogContent, $createdOn, $imgPath, $showName, $published);


?>





<!-- component -->
<body class="font-poppins antialiased">
    <div
      id="view"
      class="h-full w-screen flex flex-row"
      x-data="{ sidenav: true }"
    >
      <button
        @click="sidenav = true"
        class="p-2 border-2 bg-white rounded-md border-gray-200 shadow-lg text-gray-500 focus:bg-red-900 focus:outline-none focus:text-white absolute top-0 left-0 sm:hidden"
      >
        <svg
          class="w-5 h-5 fill-current"
          fill="currentColor"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </button>
      <div
        id="sidebar"
        class="bg-white h-screen md:block shadow-xl px-3 w-30 md:w-60 lg:w-60 overflow-x-hidden transition-transform duration-300 ease-in-out"
        x-show="sidenav"
        @click.away="sidenav = false"
      >
        <div class="space-y-6 md:space-y-10 mt-10">
         
          
          <div id="profile" class="space-y-3">
            <img
              src="https://images.unsplash.com/photo-1628157588553-5eeea00af15c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
              alt="Avatar user"
              class="w-10 md:w-16 rounded-full mx-auto"
            />
            <div>
              <h2
                class="font-medium text-xs md:text-sm text-center text-red-900"
              >
                John Doe
              </h2>
              <p class="text-xs text-gray-500 text-center">Administrator</p>
            </div>
          </div>
          
          <div id="menu" class="flex flex-col space-y-2">
            <a
              href="<?=BASE_PATH?>a/allBlogs"
              class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-red-900 hover:text-white hover:text-base rounded-md transition duration-150 ease-in-out"
            >
              <svg
                class="w-6 h-6 fill-current inline-block"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                ></path>
              </svg>
              <span class="">Blog</span>
            </a>

           
            <a
              href="<?=BASE_PATH?>a/pendingComments"
              class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-red-900 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
            >
              <svg
                class="w-6 h-6 fill-current inline-block"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"
                ></path>
                <path
                  d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"
                ></path>
              </svg>
              <span class="">Comments</span>
            </a>
           
           
            <a
              href="<?=BASE_PATH?>a/allUsers"
              class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-red-900 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
            >
              <svg
                class="w-6 h-6 fill-current inline-block"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                ></path>
              </svg>
              <span class="">Users accounts</span>
            </a>




            <a
              href="<?=BASE_PATH?>logout"
              class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-red-900 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
            >
              <img src="<?=BASE_PATH?>assets/images/signOut.svg" width="20px" height="20px" class="w-6 h-6 fill-current inline-block"
                fill="currentColor">
               <span class="">Sign out</span>
            </a>
          </div>
        </div>
      </div>
     
 

<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	<!--Responsive Extension Datatables CSS-->
	<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

<!--table of users  -->
    

  <!-- delete popup -->

  <!-- at this in to the while loop?? -->
  
  <div class="container w-full md:w-4/5 mx-auto px-2">

    <!--Title-->
    <h1>ALL BLOGS</h1>

    <!--Card-->
    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
        <button onclick="window.location.href='<?=BASE_PATH?>a/addBlog';" class="bg-red-800 text-white active:bg-red-900 font-bold uppercase text-xs px-4 py-2 my-6 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">ADD BLOG</button>

        <table id="example" class="stripe hover" style="width:100%; padding-top: 1em; padding-bottom: 1em; color: grey;">
            <thead>
                <tr>
                    <th data-priority="1">ID</th>
                    <th data-priority="2">Title</th>
                    <th data-priority="3">Content</th>
                    <th data-priority="4">Created On</th>
                    <th data-priority="5">Image Path</th>
                    <th data-priority="6">Show Name</th>
                    <th data-priority="7">Published</th>
                    <th data-priority="8">Manage</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($blogs->fetch()): ?>
                    <tr>
                        <td><?= $blogId ?></td>
                        <td><?= $title ?></td>
                        <td><?= substr($blogContent, 0, 20) . (strlen($blogContent) > 100 ? '...' : '') ?></td>
                        <td><?= $createdOn ?></td>
                        <td><?= $imgPath ?></td>
                        <td><?= $showName ?></td>
                        <td><?= $published ? 'Yes' : 'No' ?></td>
                        <td>
                        <i class="fa-solid fa-trash" onclick="window.location.href='deleteBlog/<?= $blogId ?>'"></i>
                        <i class="fa-solid fa-edit" onclick="window.location.href='editBlog/<?= $blogId ?>'"></i>
                        </td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
    <!--/Card-->

</div>
<!--/container-->


    </div>
  </body>
    



	<!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script>
		$(document).ready(function() {

			var table = $('#example').DataTable({
					responsive: true
				})
				.columns.adjust()
				.responsive.recalc();
		});
	</script>

  <script>


/*
could also send it to a differnet page that looks like a popup redirects back if cancel is clicked delete will run a script

*/





// function showDeleteModal(user_id) {
//   // Get the delete modal element
//   var modal = document.getElementById("delete_modal");

//   // Update the modal with the user ID
//   modal.querySelector(".modal-user-id").innerHTML = user_id;

//   // Show the modal
//   modal.style.display = "block";
// }


// const deleteBtn = document.querySelectorAll('.delete-btn');
// const deleteModal = document.getElementById('delete_modal');
// const cancel = document.querySelector('.cancel');

// const deleteBtn = document.querySelectorAll('.delete-btn').forEach(item => {
//   item.addEventListener('click', event => {
//     handle click 
//     deleteModal.classList.add('delete-show');
   
//   })

// })
// cancel.addEventListener('click', function() {
//     deleteModal.classList.remove('delete-show');
//   });





    </script>
 