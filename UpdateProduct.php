<div id="Updatepopup" class="box">
            <div class="popup-content animate-top">
                <div class="popup-header">
                    <h5 class="popup-title">Update Product</h5>
                    <button type="button" class="close" id="close">
                        <img src="./images/icons8-close-30.png" alt="" srcset="">
                    </button>
                </div>
                <form method="post" id="updateform">
                <div class="popup-body">
                    <!-- display message -->
                    <div class="messageBox"></div>
                
                    <div class="block">
                        <label>Intitule:</label>
                        <input type="text" name="intitule" id="intitule" class="input" placeholder="Enter Product Intitule">
                    </div>
                    <div class="block">
                        <label>Price:</label>
                        <input type="text" name="price" id="price" class="input" placeholder="Enter your Price">
                    </div>
                    <div class="block">
                        <label>Quantite:</label>
                        <input type="number" name="quantite" id="quantite" class="input" placeholder="Quantite">
                    </div>
                    <div class="block">
                     <img id="uploadup" width="100" height="100">
                        <input type="file" name="image" id="fileup" class="input" accept="image/*">
                    </div>
                </div>
                <div class="popup-footer">
                    <button type="submit" class="btnEdit">Update Product</button>
                </div>
                </form>
            </div>
        </div>
    </div>