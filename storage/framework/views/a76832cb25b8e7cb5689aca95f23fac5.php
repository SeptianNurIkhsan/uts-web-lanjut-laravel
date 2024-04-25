<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('List Contact')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">
                    <?php echo e(__('Contact List')); ?>

                </h2>

                <p class="mt-1 mb-2 text-sm text-gray-600">
                    <?php echo e(__('Here is your contact list.')); ?>

                </p>
                <div class="flex justify-end">
                    <a href="<?php echo e(route('contacts.create')); ?>"
                       class="px-4 py-2 bg-indigo-500 rounded hover:bg-indigo-700 my-2 ring-indigo-300 border border-indigo-200 text-white">Create
                        Contact</a>
                </div>
                <div class="flex justify-between items-center">
                    <form action="" method="get">
                        <input type="text" name="search" class="border border-gray-300 shadow  rounded p-3" placeholder="Cari data..." value="<?php echo e(request('search')); ?>">
                    </form>
                </div>
                
                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="p-2 border">Name</th>
                        <th class="p-2 border">Avatar</th>
                        <th class="p-2 border">Phone number</th>
                        <th class="p-2 border">Gender</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="border p-2"><?php echo e($contact->name); ?></td>
                            <td class="border p-2 flex justify-center">
                                <img src="<?php echo e(Storage::url($contact->avatar)); ?>" class="h-32 w-32" />
                            </td>
                            <td class="border p-2"><?php echo e($contact->phone_number); ?></td>
                            <td class="border p-2"><?php echo e($contact->gender); ?></td>
                            <td class="border p-2">
                                <a href="<?php echo e(route('contacts.edit', $contact)); ?>"
                                class="text-indigo-700 hover:text-gray-600">Edit</a>
                                <form action="<?php echo e(route('contacts.destroy', $contact)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <input type="submit" value="Delete" class="bg-red-500 text-white p-3">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\UTS_Web_Lanjut\resources\views\contacts\index.blade.php ENDPATH**/ ?>