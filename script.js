var state = new Array("Abia,Abuja Federal Capital Territory,Adamawa,Akwa Ibom,Anambra,Bauchi,Bayelsa,Benue,Borno,Cross River,Delta,Ebonyi,Edo,Ekiti,Enugu,Gombe,Imo,Jigawa,Kaduna,Kano,Katsina,Kebbi,Kogi,Kwara,Lagos,Nassarawa,Niger,Ogun,Ondo,Osun,Oyo,Plateau,Rivers,Sokoto,Taraba,Yobe,Zamfara ");

var lga=new Array();s_a[0]="";s_a[10]="Badakhshan|Badghis|Baghlan|Balkh|Bamian|Farah|Faryab|Ghazni|Ghowr|Helmand|Herat|Jowzjan|Kabol|Kandahar|Kapisa|Konar|Kondoz|Laghman|Lowgar|Nangarhar|Nimruz|Oruzgan|Paktia|Paktika|Parvan|Samangan|Sar-e Pol|Takhar|Vardak|Zabol";




function print_state(state_id){var option_str=document.getElementById(state_id);option_str.length=0;option_str.options[0]=new Option('Select lga','');option_str.selectedIndex=0;for(var i=0;i<state_arr.length;i++){option_str.options[option_str.length]=new Option(state_arr[i],state_arr[i]);}}function print_lga(lga_id,lga_index){var option_str=document.getElementById(lga_id);option_str.length=0;option_str.options[0]=new Option('Select lga','');option_str.selectedIndex=0;var lga_arr=s_a[lga_index].split("|");for(var i=0;i<lga_arr.length;i++){option_str.options[option_str.length]=new Option(lga_arr[i],lga_arr[i]);}}