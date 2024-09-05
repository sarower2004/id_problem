<div class="w-full h-screen flex flex-col  items-center mt-[10px]">

    <h1 class="text-[30px] font-bold">Student Info</h1>
  <div class="w-[50%] border-[2px] border-black flex flex-col justify-center items-center rounded-lg">

    <form action="./include/insertdata.php" method="POST" enctype="multipart/form-data">
      <div class="flex flex-col gap-5">

        <div class="flex flex-col mt-5">
          <label for="name"> Student Name:-</label>
          <input class="w-[400px] h-[40px] border-[2px] border-black rounded-lg" type="text" name="name" placeholder="Inter Student Name">
        </div>

        <div class="flex flex-col">
          <label for="name"> Father's Name:-</label>
          <input class="w-[400px] h-[40px] border-[2px] border-black rounded-lg" type="text" name="father_name" placeholder="Inter Father's Name">
        </div>

        <div class="flex flex-col">
          <label for="name"> Mother's Name:-</label>
          <input class="w-[400px] h-[40px] border-[2px] border-black rounded-lg" type="text" name="mother_name" placeholder="Inter Mother's Name">
        </div>

        <div class="flex flex-col">
          <label for="roll"> Roll:-</label>
          <input class="w-[400px] h-[40px] border-[2px] border-black rounded-lg" type="number" name="roll" placeholder="Inter your Roll">
        </div>

        <div class="flex flex-col">
          <label for="regi"> Registation:-</label>
          <input class="w-[400px] h-[40px] border-[2px] border-black rounded-lg" type="number" name="regi" placeholder="Inter your Regi">
        </div>

        <div class="flex flex-col">
          <label for="session"> Seasion:- </label>
          <select name="session"> 
            <option value="selected">Chose one...</option>
            <option value="2016-17"> 2016-17</option>
            <option value="2016-17"> 2018-19</option>
            <option value="2016-17"> 2020-21</option>
            <option value="2016-17"> 2022-23</option>
            <option value="2016-17"> 2024-25</option>
          </select>
        </div>
        

        <div class="flex flex-col">
          <label for="department"> Department:- </label>
          <select name="department"> 
            <option value="selected">Chose one...</option>
            <option value="Electrical Technology"> Electrial Technology</option>
            <option value="Electronics Technology"> Electronics Technology</option>
            <option value="Computer Technology"> Computer Technology</option>
            <option value="Electrical Technology"> Civil Technology</option>
          </select>
        </div>

        <div class="flex flex-col">
          <label for="shift"> Shift:- </label>
          <select name="shift"> 
            <option value="selected">Chose one...</option>
            <option value="1st Shift"> 1st Shift</option>
            <option value="1st Shift"> 2nd Shift</option> 
          </select>
        </div>

        <div class="flex flex-col">
          <label for="blood_group"> Blood Group:- </label>
          <select name="blood_group"> 
            <option value="selected">Chose one....</option>
            <option value="A(+ve)">A+</option>
            <option value="A(-ve)">A-</option>
            <option value="B(+ve)">B+</option>
            <option value="B(-ve)">B-</option>
            <option value="O(+ve)">O+</option>
            <option value="O(-ve)">O-</option>
          </select>
        </div>

      
        <div class="flex flex-col">
          <label for="contact">  Contact No:-</label>
          <input class="w-[400px] h-[40px] border-[2px] border-black rounded-lg" type="number" name="contact" placeholder="Inter Your Number">
        </div>

        <div class="flex flex-col">
          <label for="img"> Student Photo:-</label>
          <input class="g" type="file" name="img" placeholder="Inter Student Name">
        </div>

        <button type="submit" name="info-submit" class="w-[100px] py-2 px-2 bg-blue-500 rounded-lg text-white font-bold mb-5">Submit</button>

      
      </div>
    </form>
  </div>
</div>
