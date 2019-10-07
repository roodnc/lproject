<script>
import Slider from '@jeremyhamm/vue-slider'

export default {
  components: {
    'slider': Slider
    
  }
}
</script>

<template>





 <slider :width="300" margin-right= "300px" format="push" direction="left" :opacity="0.15" 
 :links="[{'id': 1, 'text': 'Upload a Post', 'url': 'http://127.0.0.1:8000/p/create'}, {'id': 2, 'text': 'Edit Profile', 'url': 'x'}]"></slider>
</template>

