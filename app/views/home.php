<style type="text/css">
.when_release {
  font-size: 5.5rem;
  color:#fff;
  text-transform: uppercase;
  position: relative;
  animation: glow 2s linear infinite;
  animation-direction: alternate;
}
.when_release span:nth-child(1) ,
.when_release span:nth-child(3) {
  position: absolute;
  top:0;
  left:0;
}
.when_release span:nth-child(1)  {
  clip-path: polygon(-10% 0%, 10% 0%, 60% 100%, -10% 100%);
  animation: crack1 0.2s linear forwards;
}
.when_release span:nth-child(2)  {
  clip-path: polygon(10% 0%, 40% 0%, 80% 100%, 60% 100%);
}
.when_release span:nth-child(3) {
  clip-path: polygon(40% 0%, 110% 0%, 110% 100%, 80% 100%);
  animation: crack2 0.2s linear forwards;
}
@keyframes crack1 {
  0% {transform: translate(0%,0%); }
  100% {transform: translate(-2%, 1%) rotateZ(1deg); }
}
@keyframes crack2 {
  0% {transform: translate(0%,0%); }
  100% {transform: translate(2%, -1%) rotateZ(1deg); }
}
@keyframes glow {
  0% {
    text-shadow: 0 0 3rem #c98686;
    filter: brightness(150%) blur(0.12rem);
  }
  100% {
    text-shadow: 0 0 3rem #ff2525;
    filter: brightness(150%) blur(0.07rem);
  }
}
</style>
<div class="w-100 overflow-hidden when_release">
    <span>Coming Soon</span>
    <span>Coming Soon</span>
    <span>Coming Soon</span>
</div>