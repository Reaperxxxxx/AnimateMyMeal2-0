
<!DOCTYPE html>
<html lang="en">
<head>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

    <div class="container">

        <div class="row">
            <div id="x" class="col-md-4"><img style="width:100%; height:auto;" src="https://placeholdit.imgix.net/~text?txtsize=72&txt=Image%201&w=1920&h=1080"></div>
            <div class="col-md-4"><img style="width:100%; height:auto;" src="https://placeholdit.imgix.net/~text?txtsize=72&txt=Image%202&w=1920&h=1080"></div>
            <div class="col-md-4"><img style="width:100%; height:auto;" src="https://placeholdit.imgix.net/~text?txtsize=72&txt=Image%203&w=1920&h=1080"></div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <img src="https://instagram.ftun1-1.fna.fbcdn.net/vp/9bfca2a1d367547cfeed79a03d55e813/5B2536CD/t51.2885-15/e35/23498461_458861627848610_3895453075963379712_n.jpg" class="enlargeImageModalSource" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>

</div>
<script src="{{asset('js\assetStore\js-modal.js')}}"></script>
</body>
</html>

