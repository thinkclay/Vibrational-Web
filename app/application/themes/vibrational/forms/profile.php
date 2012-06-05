<div id="content-target" data-role="content">
	<form id="profile" method="post" action="<?= Url::site('site/saveprofile'); ?>">
		<p>
			<label for="q1">Question 1:</label>
			<input type="text" name="q1" id="q1" value="<?= @$_POST['q1']; ?>" />
		</p>
		<p>
			<label for="q2">Question 2:</label>
			<input type="text" name="q2" id="q2" value="<?= @$_POST['q2']; ?>" />
		</p>
		<p>
			<label for="q3">Question 3:</label>
			<input type="text" name="q3" id="q3" value="<?= @$_POST['q3']; ?>" />
		</p>
		<p>
			<label for="q4">Question 4:</label>
			<input type="text" name="q4" id="q4" value="<?= @$_POST['q4']; ?>" />
		</p>
		<p>
			<label for="q5">Question 5:</label>
			<input type="text" name="q5" id="q5" value="<?= @$_POST['q5']; ?>" />
		</p>
        <p>
            <label for="q6">Question 6:</label>
            <input type="text" name="q6" id="q6" value="<?= @$_POST['q6']; ?>" />
        </p>
        <p>
            <label for="q7">Question 7:</label>
            <input type="text" name="q7" id="q7" value="<?= @$_POST['q7']; ?>" />
        </p>
        <p>
            <label for="q8">Question 8:</label>
            <input type="text" name="q8" id="q8" value="<?= @$_POST['q8']; ?>" />
        </p>
        <p>
            <label for="q9">Question 9:</label>
            <input type="text" name="q9" id="q9" value="<?= @$_POST['q9']; ?>" />
        </p>
        <p>
            <label for="q10">Question 10:</label>
            <input type="text" name="q10" id="q10" value="<?= @$_POST['q10']; ?>" />
        </p>
		<input type="submit" value="save" />
	</form>
</div>