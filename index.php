<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Catalog</title>
    <link rel="stylesheet" href="style.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <meta charset="UTF-8">
    <title>TailwindCSS | Dashboard</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="">
    <style>
    </style>

    <script src="https://cdn.tailwindcss.com"></script>

    <body>

    </body>

    </html>

    <div class="items-center w-full">
        <div class="text-center p-3">
            <div class="py-4 text-center md:py-8">
                <h4 class="text-base font-bold tracking-wide text-center uppercase text-teal-600">Special For You</h4>
                <p class="mt-2 tracking-tight text-gray-900 text:xl md:text-2xl">You can find easily categories your products</p>
            </div>
            <div class=" rounded ">
                <div id="catogoriList" class="flex justify-evenly items-center">


                </div>
            </div>
        </div>

    </div>
    <div id="result" class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3 p-3 md:p-4 xl:p-5 dark:bg-white">


    </div>
    <div>
    <div class="w-full max-w-5xl py-12 mx-auto">
  <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 justify-items-center">

    <div
      class="flex flex-col w-full gap-2 p-4 text-center bg-white border-2 border-gray-600 rounded-lg shadow-lg dark:bg-gray-800">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-10 h-10 mx-auto text-violet-500 dark:text-violet-200">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
      </svg>
      <p class="text-3xl font-medium text-gray-900 dark:text-gray-300">400+</p>
      <p class="leading-relaxed dark:text-gray-400">Products</p>
    </div>

    <div
      class="flex flex-col w-full gap-2 p-4 text-center bg-white border-2 border-gray-600 rounded-lg shadow-lg dark:bg-gray-800">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-10 h-10 mx-auto text-violet-500 dark:text-violet-200">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
      </svg>
      <p class="text-3xl font-medium text-gray-900 dark:text-gray-300">4k</p>
      <p class="leading-relaxed dark:text-gray-400">Varieties</p>
    </div>

    <div
      class="flex flex-col w-full gap-2 p-4 text-center bg-white border-2 border-gray-600 rounded-lg shadow-lg dark:bg-gray-800">
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        class="w-10 h-10 mx-auto text-violet-500 dark:text-violet-200" viewBox="0 0 24 24">
        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
        <circle cx="9" cy="7" r="4"></circle>
        <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
      </svg>
      <p class="text-3xl font-medium text-gray-900 dark:text-gray-300">1M+</p>
      <p class="leading-relaxed dark:text-gray-400">Users</p>
    </div>

    <div
      class="flex flex-col w-full gap-2 p-4 text-center bg-white border-2 border-gray-600 rounded-lg shadow-lg dark:bg-gray-800">

      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-10 h-10 mx-auto text-violet-500 dark:text-violet-200">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
      </svg>

      <p class="text-3xl font-medium text-gray-900 dark:text-gray-300">
        100k+
      </p>
      <p class="leading-relaxed dark:text-gray-400">Searches per month</p>
    </div>
  </div>
</div>
    </div>
    <?php
    include 'footer.php';
    ?>


</body>
<script>
    //api call-using fetch method
    const displayAllProducts =(allChexkCata = [])=> fetch("https://dummyjson.com/products").then((apiResponse) => {

        console.log(apiResponse);
        const allCata = []
        const CatagoryListDiv = document.querySelector("#catogoriList")
        apiResponse.json().then((allProducts) => {
            console.log(allProducts.products);
            allProducts.products.forEach(product => {

                if (!allCata.includes(product.category)) {
                    CatagoryListDiv.innerHTML += `
                 <label >
                <input onclick='catogoryFilter()' value="${product.category}" type="checkbox"> ${product.category}
               </label>
                `
                    allCata.push(product.category)
                }
                if (allChexkCata.length == 0) {
                    allChexkCata = allCata
                }
                if (allChexkCata.includes(product.category)) {
                    result.innerHTML += `
                 <div class=" bg-white rounded-lg bg-white">
               <div class="max-w-md mx-auto rounded-md overflow-hidden shadow-md hover:shadow-lg">
                <div class="relative">
                    <img width:"100%" height="150px" class=" w-full image-fluid" src=${product.thumbnail} alt="Product Image">
                    <div class="absolute top-0 right-0 bg-blue-500 text-black px-2 py-1 m-2 rounded-md text-sm font-medium">${product.brand}
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-black text-lg font-medium mb-2">${product.title} (${product.category} )</h3>
                    <p class="text-black text-sm mb-4">${product.description} <br>
                     </p>
                    <div class="flex items-center justify-between">
                        <span class="text-black font-bold text-lg">$ ${product.price}</span>
                         <button href="header.php" class="bg-green-500 hover:bg-green-600 text-black font-bold py-2 px-4 rounded">
                            View Details
                        </button>
                        <button class="bg-blue-500 hover:bg-blue-600 text-black font-bold py-2 px-4 rounded">
                            Buy Now
                        </button>
                    </div>
                </div>
            </div>
              </div>
                `
                }

            })


        })

    }).catch((error) => {
        console.log(error);

    })
    displayAllProducts()
    let catogoryFilter = () => {
        let checkInput = document.querySelectorAll("input[type='checkbox']")
        let checkdata = [];
        checkInput.forEach((e) => {
        if(e.checked){
            checkdata.push(e.value)
            
        }
        
        })
       displayAllProducts(checkdate)
        
    }
</script>

</html>

