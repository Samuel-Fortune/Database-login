<?php
include "db.php";
include "function.php";

if (isset($_POST['submit'])) {
    deleteRows();
}

?>
<?php include "includes/header.php";?>
<body>
    <div class="w-full h-screen flex items-center justify-center      bg-indigo-100">
        <form action="login_delete.php" method="post" class="w-full   md:w-1/3 rounded-lg">
            <div class="flex font-bold justify-center mt-6">
              <img class="h-32 w-32 mb-3 rounded-fulltransition-all hover:animate-pulsehover:transition-all" src="https://images.unsplashcom/photo-1670871296086-dbb732f5938d?ixlib=rb-4.0.3ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8Hw%3D&auto=format&fit=crop&w=800&q=60" />
            </div>
            <h2 class="text-2xl text-center text-black mb-8">Delete</h2>
            <div class="px-12 pb-10">
                <div class="w-full mb-2">
                    <div class="flex items-center">
                      <input
                        type="text"
                        placeholder="Enter Username"
                        name="username"
                        class="
                          w-full
                          border
                          rounded
                          px-3
                          py-2
                          text-gray-700
                          focus:outline-none
                        "
                      />
                    </div>
                </div>
                <div class="w-full mb-2">
                    <div class="flex items-center">
                      <input
                        type="password"
                        name="password"
                        placeholder="Password"

                        class="
                          w-full
                          border
                          rounded
                          px-3
                          py-2
                          text-gray-700
                          focus:outline-none
                        "
                      />
                    </div>
                </div>
                <div class"w-full">
                  <select class="w-16" name="id" id="">


                    <?php
showAllData();

?>



                  </select>
                </div>
                 <button
                    type="submit"
                    name="submit"
                    class="
                      w-full
                      py-2
                      mt-8
                      rounded-full
                      bg-blue-400
                      text-gray-100
                      focus:outline-none
                      brightness-75
                      hover:brightness-110
                    "
                  >
                    DELETE
                </button>
            </div>
        </form>
        <?php include "includes/footer.php";?>
