<script>
import Slider from '@jeremyhamm/vue-slider'
export default {
         props: ['userId'],
  components: {
    'slider': Slider
    
  }
}
</script>

<template>



 <slider :width="300" margin-right= "300px" format="push" direction="left" :opacity="0.15" 
 :links="[{'id': 1, 'text': 'BIANCO ist eine SocialMedia Plattform im Aufbau '}, {'id': 2, 'text': ''} , {'id': 3, 'text': ''}, {'id': 2, 'text': ''} , {'id': 3, 'text': ''}, {'id': 2, 'text': ''} , {'id': 3, 'text': ''}, {'id': 2, 'text': ''} , {'id': 3, 'text': ''}, {'id': 2, 'text': ''} , {'id': 3, 'text': ''}, {'id': 2, 'text': ''} , {'id': 3, 'text': ''}, {'id': 2, 'text': ''} , {'id': 3, 'text': ''}, {'id': 2, 'text': ''} , {'id': 3, 'text': ''} ,{'id': 2, 'text': ''} , {'id': 3, 'text': ''}, {'id': 2, 'text': ''} , {'id': 3, 'text': ''}, {'id': 2, 'text': ''} , {'id': 3, 'text': ''}, {'id': 2, 'text': ''} , {'id': 3, 'text': ''}, {'id': 2, 'text': ''} , {'id': 3, 'text': ''}, {'id': 2, 'text': ''} , {'id': 3, 'text': ''}, {'id': 2, 'text': ''} , {'id': 3, 'text': ''}, {'id': 2, 'text': ''} , {'id': 3, 'text': ''} ,{'id': 2, 'text': ''} , {'id': 3, 'text': ''},{'id': 2, 'text': ''} , {'id': 3, 'text': ''},{'id': 2, 'text': ''} , {'id': 3, 'text': ''}, {'id': 8, 'text': 'Kontakt Via E-Mail auf Bianco@haw.de'} ]"></slider>
</template>