$(document).ready(function()
{
  
  $("#operation1").hide(1);
   $("#plan-btn").click(function()
   {


 var category = $("#category").val();
  


    

       
        var content =  $("#operation1").html();
        $("#main_place").html(content);

        


       if(category == "Mediterranean")
       {
         
       
        change(

                 "Greek yogurt with strawberries and chia seeds",
                 "a whole grain sandwich with hummus and vegetables",
                 "a handful of nuts",
                 "a tuna salad with greens and olive oil, as well as a fruit salad",

                 "oatmeal with blueberries",
                 "caprese zucchini noodles with mozzarella, cherry tomatoes, olive oil, and balsamic vinegar",
                 "a piece of fruit",
                 "a salad with tomatoes, olives, cucumbers, farro, grilled chicken, and feta cheese",

                 "an omelet with mushrooms, tomatoes, and onions",
                 "a whole grain sandwich with cheese and fresh vegetables",
                 "baby carrots with hummus",
                 "Mediterranean lasagna",

                 "yogurt with sliced fruit and nuts",
                 "a quinoa salad with chickpeas",
                 "mixed berries",
                 "broiled salmon with brown rice and vegetables",

                 "eggs and sautéed vegetables with whole wheat toast",
                 "stuffed zucchini boats with pesto, turkey sausage, tomatoes, bell peppers, and cheese",
                 "cottage cheese with fresh fruit",
                 "grilled lamb with salad and baked potato",

                 "oatmeal with raisins, nuts, and apple slices",
                 "a whole grain sandwich with vegetables",
                 "sliced bell peppers with guacamole",
                 " Mediterranean pizza made with whole wheat pita bread and topped with cheese, vegetables, and olives",

                 "an omelet with veggies and olives",
                 "falafel bowl with feta, onions, tomatoes, hummus, and rice",
                 "apple slices with almond butter",
                 "grilled chicken with vegetables, sweet potato fries, and fresh fruit" );
       
       }
       else if(category == "Keto")
       {

          change(
            "two eggs fried in butter served with sauteed greens",
            "a bunless burger topped with cheese, mushrooms, and avocado atop a bed of greens",
            "almonds and cheddar cheese",
            "pork chops with green beans sauteed in olive oil",

            "mushroom omelet",
            "tuna salad with celery and tomato atop a bed of greens",
            "half an avocado stuffed with chicken salad",
            "roast chicken with cream sauce and sauteed broccoli",

            "bell pepper stuffed with cheese and eggs",
            "arugula salad with hard-boiled eggs, turkey, avocado, and blue cheese",
            "guacamole with low carb veggies",
            "grilled salmon with spinach sauteed in sesame oil",

            "full-fat yogurt topped with Keto granola",
            "steak bowl with cauliflower rice, cheese, herbs, avocado, and salsa",
            "trail mix made with unsweetened coconut, nuts, and seeds",
            "bison steak with cheesy broccoli",

            "baked avocado egg boats",
            "Caesar salad with chicken",
            "hard-boiled eggs",
            "pork chops with vegetables",

            "cauliflower toast topped with cheese and avocado",
            "bunless salmon burgers topped with pesto",
            "berries with heavy whipping cream",
            "meatballs served with zucchini noodles and Parmesan cheese",

            "coconut milk chia pudding topped with coconut and walnuts",
            "Cobb salad made with greens, hard-boiled eggs, avocado, cheese, and turkey",
            "cheese roll-ups",
            "coconut chicken curry"



            );
       
       }
       else if(category == "Flexiatarian")
       {

                change(
                         "Strawberry-Pineapple Smoothie",
                         "Veggie & Hummus Sandwich",
                         "low-fat plain Greek yogurt",
                         "Greek Salmon Bowl",

                         "Muffin-Tin Omelets with Bell Pepper, Black Beans & Jack Cheese",
                         "Meal-Prep Vegan Moroccan Lettuce Wraps",
                         "dry-roasted unsalted almonds",
                         "Vegan Pad Thai with Tofu",

                         "Muffin-Tin Omelets with Bell Pepper, Black Beans & Jack Cheese",
                         "salad with greens, shrimp, corn, black beans, and avocado",
                         "Greek Salad with Edamame",
                         "cup dry-roasted unsalted almonds",

                         "Strawberry-Pineapple Smoothie",
                         "Meal-Prep Vegan Moroccan Lettuce Wraps",
                         "natural peanut butter",
                         "Sheet-Pan Balsamic-Parmesan Roasted Chickpeas & Vegetables",

                         "coconut yogurt with bananas and walnuts",
                         "whole grain wrap with hummus, vegetables, and chickpeas",
                         "1 medium apple",
                         "grilled salmon, baked sweet potato, and green beans",


                         "over-easy eggs with sauteed veggies and fruit salad",
                         "peanut butter sandwich with crushed berries on whole grain bread",
                         "1/4 cup raspberries",
                         " black bean burgers with avocado and sweet potato fries",

                         "tofu scramble with mixed veggies and spices",
                         "quinoa salad with dried cranberries, pecans, and feta cheese",
                         "1 large pear",
                         "stuffed bell peppers with ground turkey and a side salad"
                    );

       
       }
       else if(category == "Vegan")
       {

        change(
          "tempeh bacon with sautéed mushrooms, avocado, and wilted arugula",
          "whole-grain pasta with lentil “meatballs” and a side salad",
          "air-popped popcorn, kale chips, and trail mix",
          "cauliflower and chickpea tacos with guacamole and pico de gallo",

          "coconut yogurt with berries, walnuts, and chia seeds",
          "baked tofu with sautéed red cabbage, Brussels sprouts, and herbed couscous",
          "bell peppers with guacamole, fruit leather, and seaweed crisps",
          "mushroom lentil loaf with garlic cauliflower and Italian green beans",

          "sweet potato toast topped with peanut butter and banana",
          "tempeh taco salad with quinoa, avocados, tomatoes, onions, beans, and cilantro",
          " mixed berries, vegan protein shake, and walnuts",
          "oat risotto with Swiss chard, mushrooms, and butternut squash",


          "eggless quiche with silken tofu, broccoli, tomatoes, and spinach",
          "chickpea and spinach curry with brown rice",
          "roasted edamame, sliced pear, and energy balls made from oats, chia seeds, nut butter, and dried fruit",
          "Mediterranean lentil salad with cucumbers, olives, peppers, sun-dried tomatoes, kale, and parsley",

          "overnight oats with apple slices, pumpkin seeds, cinnamon, and nut butter",
          "black bean veggie burger with steamed broccoli and sweet potato wedges",
          "pistachios, homemade granola, and coconut chia pudding",
          "mac and “cheese” with nutritional yeast and collard greens",

          "breakfast skillet with tempeh, broccoli, kale, tomatoes, and zucchini",
          "garlic-ginger tofu with stir-fried veggies and quinoa",
          "roasted pumpkin seeds, frozen grapes, and celery with almond butter",
          "bean salad with black-eyed peas, tomatoes, corn, bell peppers, and onions",

          "whole-grain toast with avocado and nutritional yeast alongside a vegan protein shake",
          "lentil chili with grilled asparagus and baked potato",
          "almonds, fruit salad, and carrots with hummus",
          "vegetable paella with brown rice, onions, tomatoes, bell peppers, artichoke, and chickpeas"
          );
       
       }

      
      
     function change(val1,val2,val3,val4,val5,val6,val7,val8,val9,val10,val11,val12,val13,val14,val15,val16,val17,val18,val19,val20,val21,val22,val23,val24,val25,val26,val27,val28)
       
          { 
               
           
                   $("#1").text(val1);
                   $("#2").text(val2);
                   $("#3").text(val3);
                   $("#4").text(val4);
                   $("#5").text(val5);
                   $("#6").text(val6);
                   $("#7").text(val7);
                   $("#8").text(val8);
                   $("#9").text(val9);
                   $("#10").text(val10);
                   $("#11").text(val11);
                   $("#12").text(val12);
                   $("#13").text(val13);
                   $("#14").text(val14);
                   $("#15").text(val15);
                   $("#16").text(val16);
                   $("#17").text(val17);
                   $("#18").text(val18);
                   $("#19").text(val19);
                   $("#20").text(val20);
                   $("#21").text(val21);
                   $("#22").text(val22);
                   $("#23").text(val23);
                   $("#24").text(val24);
                   $("#25").text(val25);
                   $("#26").text(val26);
                   $("#27").text(val27);
                   $("#28").text(val28);

       }  

           });


});
