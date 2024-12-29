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
    <?php
    include 'footer.php';
    ?>


</body>
<script>
    //api call-using fetch method
    const displayAllProducts = fetch("https://dummyjson.com/products").then((apiResponse) => {
        allChexkCata = [];
        console.log(apiResponse);
        const allCata = []
        const CatagoryListDiv = document.querySelector("#catogoriList")
        apiResponse.json().then((allProducts) => {
            console.log(allProducts.products);
            allProducts.products.forEach(product => {

                if (!allCata.includes(product.category)) {
                    CatagoryListDiv.innerHTML += `
                 <label >
                <input onclick="catogoryFilter()" value="${product.category}" type="checkbox"> ${product.category}
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
        let checkData = [];
        checkInput.forEach((e) => {
            if (e.checked) {
                checkData.push(e.value)
            }
        })
        displayAllProducts(checkData)
    }

exit;
</script>

</html>